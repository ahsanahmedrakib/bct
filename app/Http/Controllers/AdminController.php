<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\BlogPost;
use App\Models\ContactMessage;
use App\Models\GalleryImage;
use App\Models\HeroSlide;
use App\Models\Location;
use App\Models\Faq;
use App\Models\MarqueeItem;
use App\Models\PricingPlan;
use App\Models\Project;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Resolve the requested page size, clamped to allowed options.
     * Default is 10; the administrator can pick 25, 50 or 100.
     */
    private function perPage(Request $request): int
    {
        $sizes = [10, 25, 50, 100];
        $perPage = (int) $request->input('per_page', $request->input('size', 10));

        return in_array($perPage, $sizes, true) ? $perPage : 10;
    }

    public function dashboardView()
    {
        return view('admin.dashboard');
    }

    public function queriesView()
    {
        return view('admin.queries');
    }

    public function dashboard()
    {
        $stats = [
            'total' => ContactMessage::count(),
            'unread' => ContactMessage::where('is_read', false)->count(),
            'projects' => Project::where('seed', false)->count(),
            'categories' => Category::where('seed', false)->count(),
        ];

        return response()->json([
            'success' => true,
            'stats' => $stats,
            'recent_queries' => ContactMessage::latest()->limit(5)->get(),
            'recent_projects' => Project::with('category')
                ->where('seed', false)
                ->latest()
                ->limit(5)
                ->get(),
        ]);
    }

    public function index(Request $request)
    {
        $query = ContactMessage::query();

        if ($request->filled('filter')) {
            $query->where('is_read', $request->filter === 'read');
        }

        $messages = $query->latest()
            ->paginate($this->perPage($request));

        return response()->json([
            'success' => true,
            'data' => $messages->items(),
            'pagination' => [
                'total' => $messages->total(),
                'per_page' => $messages->perPage(),
                'current_page' => $messages->currentPage(),
                'last_page' => $messages->lastPage(),
            ],
        ]);
    }

    public function show(ContactMessage $message)
    {
        return response()->json([
            'success' => true,
            'data' => $message,
        ]);
    }

    public function markRead(ContactMessage $message)
    {
        $message->update(['is_read' => true]);

        return response()->json([
            'success' => true,
            'message' => 'Message marked as read.',
            'data' => $message,
        ]);
    }

    public function markUnread(ContactMessage $message)
    {
        $message->update(['is_read' => false]);

        return response()->json([
            'success' => true,
            'message' => 'Message marked as unread.',
            'data' => $message,
        ]);
    }

    public function destroy(ContactMessage $message)
    {
        $message->delete();

        return response()->json([
            'success' => true,
            'message' => 'Contact query deleted.',
        ]);
    }

    // ── Projects CRUD ──────────────────────────────────────────

    public function projectApiGateway(Request $request)
    {
        // When visited directly in a browser, serve the admin
        // management view with add / update / delete controls.
        // JS/API calls (Accept: application/json) get the data list.
        if ($request->expectsJson()) {
            if (auth('admin')->check()) {
                return $this->projectIndex($request);
            }

            return response()->json([
                'message' => 'Unauthenticated.',
            ], 401);
        }

        return $this->projectView();
    }

    public function projectView()
    {
        return view('admin.projects');
    }

    public function projectIndex(Request $request)
    {
        $query = Project::where('seed', false)->with('category');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhereHas('category', fn ($c) => $c->where('name', 'like', "%{$search}%"));
            });
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        $projects = $query->latest()->paginate($this->perPage($request));

        $data = array_map(function ($project) {
            $project['category_name'] = $project->category?->name;
            unset($project['category']);

            return $project;
        }, $projects->items());

        return response()->json([
            'success' => true,
            'data' => $data,
            'pagination' => [
                'total' => $projects->total(),
                'per_page' => $projects->perPage(),
                'current_page' => $projects->currentPage(),
                'last_page' => $projects->lastPage(),
            ],
        ]);
    }

    public function projectStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:500',
            'category_id' => 'required|integer|exists:categories,id',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:2048',
        ], [
            'title.required' => 'Project title is required.',
            'category_id.required' => 'Please select a category.',
            'category_id.exists' => 'Selected category is invalid.',
            'image.required' => 'Project image is required.',
            'image.image' => 'File must be an image.',
            'image.mimes' => 'Image must be PNG, JPG, JPEG, or WebP.',
            'image.max' => 'Image must not exceed 2MB.',
            'url.required' => 'Project URL is required.',
            'url.url' => 'Please enter a valid URL.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        $data['seed'] = false;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_'.preg_replace('/\s+/', '_', strtolower(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/web/portfolio'), $filename);
            $data['image'] = '/images/web/portfolio/'.$filename;
        }

        $project = Project::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Project created successfully.',
            'data' => $project->load('category'),
        ], 201);
    }

    public function projectShow(Project $project)
    {
        if ($project->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed projects cannot be managed.',
            ], 403);
        }

        return response()->json([
            'success' => true,
            'data' => $project->load('category'),
        ]);
    }

    public function projectUpdate(Request $request, Project $project)
    {
        if ($project->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed projects cannot be managed.',
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:500',
            'category_id' => 'required|integer|exists:categories,id',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
        ], [
            'title.required' => 'Project title is required.',
            'category_id.required' => 'Please select a category.',
            'category_id.exists' => 'Selected category is invalid.',
            'image.image' => 'File must be an image.',
            'image.mimes' => 'Image must be PNG, JPG, JPEG, or WebP.',
            'image.max' => 'Image must not exceed 2MB.',
            'url.required' => 'Project URL is required.',
            'url.url' => 'Please enter a valid URL.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();

        if ($request->hasFile('image')) {
            if ($project->image && file_exists(public_path($project->image))) {
                unlink(public_path($project->image));
            }
            $file = $request->file('image');
            $filename = time().'_'.preg_replace('/\s+/', '_', strtolower(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/web/portfolio'), $filename);
            $data['image'] = '/images/web/portfolio/'.$filename;
        } else {
            unset($data['image']);
        }

        $project->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Project updated successfully.',
            'data' => $project,
        ]);
    }

    public function projectDestroy(Project $project)
    {
        if ($project->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed projects cannot be managed.',
            ], 403);
        }

        if ($project->image && file_exists(public_path($project->image))) {
            unlink(public_path($project->image));
        }
        $project->delete();

        return response()->json([
            'success' => true,
            'message' => 'Project deleted successfully.',
        ]);
    }

    // ── Categories CRUD ────────────────────────────────────────

    public function categoryApiGateway(Request $request)
    {
        if ($request->expectsJson()) {
            if (auth('admin')->check()) {
                return $this->categoryIndex($request);
            }

            return response()->json([
                'message' => 'Unauthenticated.',
            ], 401);
        }

        return $this->categoryView();
    }

    public function categoryView()
    {
        return view('admin.categories');
    }

    public function categoryIndex(Request $request)
    {
        $query = Category::where('seed', false)->withCount('projects');

        if ($request->filled('search')) {
            $query->where('name', 'like', "%{$request->search}%");
        }

        $categories = $query->latest()->paginate($this->perPage($request));

        return response()->json([
            'success' => true,
            'data' => $categories->items(),
            'pagination' => [
                'total' => $categories->total(),
                'per_page' => $categories->perPage(),
                'current_page' => $categories->currentPage(),
                'last_page' => $categories->lastPage(),
            ],
        ]);
    }

    public function categoryOptions()
    {
        return response()->json([
            'success' => true,
            'data' => Category::where('seed', false)->orderBy('name')->get(['id', 'name']),
        ]);
    }

    public function categoryShow(Category $category)
    {
        if ($category->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed categories cannot be managed.',
            ], 403);
        }

        return response()->json([
            'success' => true,
            'data' => $category->loadCount('projects'),
        ]);
    }

    public function categoryStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:categories,name',
        ], [
            'name.required' => 'Category name is required.',
            'name.unique' => 'This category already exists.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $category = Category::create([
            'name' => $request->name,
            'seed' => false,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Category created successfully.',
            'data' => $category,
        ], 201);
    }

    public function categoryUpdate(Request $request, Category $category)
    {
        if ($category->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed categories cannot be managed.',
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:categories,name,'.$category->id,
        ], [
            'name.required' => 'Category name is required.',
            'name.unique' => 'This category already exists.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $category->update(['name' => $request->name]);

        return response()->json([
            'success' => true,
            'message' => 'Category updated successfully.',
            'data' => $category,
        ]);
    }

    public function categoryDestroy(Category $category)
    {
        if ($category->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed categories cannot be managed.',
            ], 403);
        }

        if ($category->projects()->count() > 0) {
            return response()->json([
                'success' => false,
                'message' => 'This category has projects. Delete its projects first.',
            ], 409);
        }

        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully.',
        ]);
    }

    // ── Team Members CRUD ──────────────────────────────────────

    public function teamApiGateway(Request $request)
    {
        // When visited directly in a browser, serve the admin
        // management view with add / update / delete controls.
        // JS/API calls (Accept: application/json) get the data list.
        if ($request->expectsJson()) {
            if (auth('admin')->check()) {
                return $this->teamIndex($request);
            }

            return response()->json([
                'message' => 'Unauthenticated.',
            ], 401);
        }

        return $this->teamView();
    }

    public function teamView()
    {
        return view('admin.team');
    }

    public function teamIndex(Request $request)
    {
        $query = TeamMember::where('seed', false);

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('role', 'like', "%{$search}%");
            });
        }

        $members = $query->latest()->paginate($this->perPage($request));

        return response()->json([
            'success' => true,
            'data' => $members->items(),
            'pagination' => [
                'total' => $members->total(),
                'per_page' => $members->perPage(),
                'current_page' => $members->currentPage(),
                'last_page' => $members->lastPage(),
            ],
        ]);
    }

    public function teamStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'label' => 'required|string|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp,jfif|max:2048',
            'facebook' => 'nullable|string|max:500',
            'instagram' => 'nullable|string|max:500',
            'linkedin' => 'nullable|string|max:500',
            'x' => 'nullable|string|max:500',
        ], [
            'name.required' => 'Member name is required.',
            'role.required' => 'Role is required.',
            'label.required' => 'Label is required.',
            'image.required' => 'Member photo is required.',
            'image.image' => 'File must be an image.',
            'image.mimes' => 'Image must be PNG, JPG, JPEG, WebP, or JFIF.',
            'image.max' => 'Image must not exceed 2MB.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        $data['seed'] = false;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_'.preg_replace('/\s+/', '_', strtolower(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/home/team'), $filename);
            $data['image'] = '/images/home/team/'.$filename;
        }

        $member = TeamMember::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Team member created successfully.',
            'data' => $member,
        ], 201);
    }

    public function teamShow(TeamMember $teamMember)
    {
        if ($teamMember->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed team members cannot be managed.',
            ], 403);
        }

        return response()->json([
            'success' => true,
            'data' => $teamMember,
        ]);
    }

    public function teamUpdate(Request $request, TeamMember $teamMember)
    {
        if ($teamMember->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed team members cannot be managed.',
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'label' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp,jfif|max:2048',
            'facebook' => 'nullable|string|max:500',
            'instagram' => 'nullable|string|max:500',
            'linkedin' => 'nullable|string|max:500',
            'x' => 'nullable|string|max:500',
        ], [
            'name.required' => 'Member name is required.',
            'role.required' => 'Role is required.',
            'label.required' => 'Label is required.',
            'image.image' => 'File must be an image.',
            'image.mimes' => 'Image must be PNG, JPG, JPEG, WebP, or JFIF.',
            'image.max' => 'Image must not exceed 2MB.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();

        if ($request->hasFile('image')) {
            if ($teamMember->image && file_exists(public_path($teamMember->image))) {
                unlink(public_path($teamMember->image));
            }
            $file = $request->file('image');
            $filename = time().'_'.preg_replace('/\s+/', '_', strtolower(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/home/team'), $filename);
            $data['image'] = '/images/home/team/'.$filename;
        } else {
            unset($data['image']);
        }

        $teamMember->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Team member updated successfully.',
            'data' => $teamMember,
        ]);
    }

    public function teamDestroy(TeamMember $teamMember)
    {
        if ($teamMember->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed team members cannot be managed.',
            ], 403);
        }

        if ($teamMember->image && file_exists(public_path($teamMember->image))) {
            unlink(public_path($teamMember->image));
        }
        $teamMember->delete();

        return response()->json([
            'success' => true,
            'message' => 'Team member deleted successfully.',
        ]);
    }

    // ── Hero Slides CRUD ─────────────────────────────────────

    public function heroSlideApiGateway(Request $request)
    {
        if ($request->expectsJson()) {
            if (auth('admin')->check()) {
                return $this->heroSlideIndex($request);
            }

            return response()->json([
                'message' => 'Unauthenticated.',
            ], 401);
        }

        return $this->heroSlideView();
    }

    public function heroSlideView()
    {
        return view('admin.hero');
    }

    public function heroSlideIndex(Request $request)
    {
        $query = HeroSlide::where('seed', false);

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('subtitle', 'like', "%{$search}%");
            });
        }

        $slides = $query->orderBy('sort_order')->latest()->paginate($this->perPage($request));

        return response()->json([
            'success' => true,
            'data' => $slides->items(),
            'pagination' => [
                'total' => $slides->total(),
                'per_page' => $slides->perPage(),
                'current_page' => $slides->currentPage(),
                'last_page' => $slides->lastPage(),
            ],
        ]);
    }

    public function heroSlideStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subtitle' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'required|string|max:500',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:5120',
            'sort_order' => 'nullable|integer|min:1',
            'crop_position' => 'nullable|string|in:top,top-left,top-center,top-right,left,center,center-left,center-right,right,bottom,bottom-left,bottom-center,bottom-right',
        ], [
            'subtitle.required' => 'Subtitle is required.',
            'title.required' => 'Title is required.',
            'link.required' => 'Link is required.',
            'link.max' => 'Link must not exceed 500 characters.',
            'image.required' => 'Hero image is required.',
            'image.image' => 'File must be an image.',
            'image.mimes' => 'Image must be PNG, JPG, JPEG, or WebP.',
            'image.max' => 'Image must not exceed 5MB.',
            'crop_position.in' => 'Invalid crop position selected.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        $data['seed'] = false;

        if ($request->hasFile('image')) {
            $data['image'] = $this->cropHeroImage($request->file('image'), $data['crop_position'] ?? 'center');
        }

        unset($data['crop_position']);

        $slide = HeroSlide::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Hero slide created successfully.',
            'data' => $slide,
        ], 201);
    }

    public function heroSlideShow(HeroSlide $heroSlide)
    {
        if ($heroSlide->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed hero slides cannot be managed.',
            ], 403);
        }

        return response()->json([
            'success' => true,
            'data' => $heroSlide,
        ]);
    }

    public function heroSlideUpdate(Request $request, HeroSlide $heroSlide)
    {
        if ($heroSlide->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed hero slides cannot be managed.',
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'subtitle' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'required|string|max:500',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5120',
            'sort_order' => 'nullable|integer|min:1',
            'crop_position' => 'nullable|string|in:top,top-left,top-center,top-right,left,center,center-left,center-right,right,bottom,bottom-left,bottom-center,bottom-right',
        ], [
            'subtitle.required' => 'Subtitle is required.',
            'title.required' => 'Title is required.',
            'link.required' => 'Link is required.',
            'link.max' => 'Link must not exceed 500 characters.',
            'image.image' => 'File must be an image.',
            'image.mimes' => 'Image must be PNG, JPG, JPEG, or WebP.',
            'image.max' => 'Image must not exceed 5MB.',
            'crop_position.in' => 'Invalid crop position selected.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();

        if ($request->hasFile('image')) {
            if ($heroSlide->image && file_exists(public_path($heroSlide->image))) {
                unlink(public_path($heroSlide->image));
            }
            $data['image'] = $this->cropHeroImage($request->file('image'), $data['crop_position'] ?? 'center');
        } else {
            unset($data['image']);
        }

        unset($data['crop_position']);

        $heroSlide->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Hero slide updated successfully.',
            'data' => $heroSlide,
        ]);
    }

    public function heroSlideDestroy(HeroSlide $heroSlide)
    {
        if ($heroSlide->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed hero slides cannot be managed.',
            ], 403);
        }

        if ($heroSlide->image && file_exists(public_path($heroSlide->image))) {
            unlink(public_path($heroSlide->image));
        }
        $heroSlide->delete();

        return response()->json([
            'success' => true,
            'message' => 'Hero slide deleted successfully.',
        ]);
    }

    /**
     * Scale the uploaded hero image to cover the exact 1048 x 950 canvas used
     * by the hero-v2 slides, then keep the section chosen by the admin:
     * top / center / bottom vertically and left / center / right horizontally
     * (e.g. "top-left", "center", "bottom-right"). Defaults to "center".
     */
    private function cropHeroImage($file, string $position = 'center')
    {
        $width = 1048;
        $height = 950;

        $tempPath = $file->getRealPath();

        [$srcW, $srcH, $type] = getimagesize($tempPath);

        $src = match ($type) {
            IMAGETYPE_JPEG => imagecreatefromjpeg($tempPath),
            IMAGETYPE_PNG => imagecreatefrompng($tempPath),
            IMAGETYPE_WEBP => imagecreatefromwebp($tempPath),
            default => null,
        };

        if (! $src) {
            abort(422, 'Unsupported image format.');
        }

        // Apply the EXIF orientation stored in camera JPEGs before cropping,
        // otherwise GD renders the photo sideways and crops the wrong area.
        if ($type === IMAGETYPE_JPEG) {
            $orientation = $this->readExifOrientation($tempPath);
            if (in_array($orientation, [3, 6, 8], true)) {
                $src = match ($orientation) {
                    3 => imagerotate($src, 180, 0),
                    6 => imagerotate($src, -90, 0),
                    8 => imagerotate($src, 90, 0),
                };
                $srcW = imagesx($src);
                $srcH = imagesy($src);
            }
        }

        $scale = max($width / $srcW, $height / $srcH);
        $newW = max(1, (int) round($srcW * $scale));
        $newH = max(1, (int) round($srcH * $scale));

        $parts = explode('-', $position);
        $vertical = $parts[0] ?? 'center';
        $horizontal = $parts[1] ?? 'center';

        $srcX = match ($horizontal) {
            'left' => 0,
            'right' => max(0, $newW - $width),
            default => (int) floor(($newW - $width) / 2),
        };

        $srcY = match ($vertical) {
            'top' => 0,
            'bottom' => max(0, $newH - $height),
            default => (int) floor(($newH - $height) / 2),
        };

        $resized = imagecreatetruecolor($newW, $newH);
        imagealphablending($resized, false);
        imagesavealpha($resized, true);
        $transparent = imagecolorallocatealpha($resized, 0, 0, 0, 127);
        imagefill($resized, 0, 0, $transparent);
        imagecopyresampled($resized, $src, 0, 0, 0, 0, $newW, $newH, $srcW, $srcH);

        $dst = imagecreatetruecolor($width, $height);
        imagealphablending($dst, false);
        imagesavealpha($dst, true);
        $dstTransparent = imagecolorallocatealpha($dst, 0, 0, 0, 127);
        imagefill($dst, 0, 0, $dstTransparent);

        imagecopyresampled($dst, $resized, 0, 0, $srcX, $srcY, $width, $height, $width, $height);

        imagedestroy($src);
        imagedestroy($resized);

        $filename = time().'_'.preg_replace('/\s+/', '_', strtolower(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))).'.'.$file->getClientOriginalExtension();
        $dir = public_path('images/home/hero');

        if (! is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        $path = $dir.'/'.$filename;

        match ($type) {
            IMAGETYPE_JPEG => imagejpeg($dst, $path, 90),
            IMAGETYPE_PNG => imagepng($dst, $path, 6),
            IMAGETYPE_WEBP => imagewebp($dst, $path, 90),
            default => null,
        };

        imagedestroy($dst);

        return '/images/home/hero/'.$filename;
    }

    /**
     * Read the EXIF Orientation tag (0x0112) from a JPEG without relying on
     * the PHP "exif" extension. Camera photos embed this so GD must rotate
     * the image before cropping. Returns 1 (normal) by default.
     */
    private function readExifOrientation(string $filePath): int
    {
        $data = @file_get_contents($filePath);
        if ($data === false || strlen($data) < 4) {
            return 1;
        }

        $pos = 2;
        $length = strlen($data);

        while ($pos + 4 <= $length) {
            if (ord($data[$pos]) !== 0xFF) {
                $pos++;
                continue;
            }

            $marker = ord($data[$pos + 1]);

            if ($marker === 0x01 || ($marker >= 0xD0 && $marker <= 0xD7)) {
                $pos += 2;
                continue;
            }

            $segLen = (ord($data[$pos + 2]) << 8) | ord($data[$pos + 3]);
            if ($segLen < 2) {
                break;
            }

            if ($marker === 0xE1 && $segLen >= 8
                && substr($data, $pos + 4, 4) === 'Exif'
                && ord($data[$pos + 8]) === 0x00
                && ord($data[$pos + 9]) === 0x00) {
                $tiff = $pos + 10;

                if ($tiff + 8 > $length) {
                    return 1;
                }

                $little = substr($data, $tiff, 2) === 'II';
                $uint32 = function (int $offset) use ($data, $little, $length): int {
                    if ($offset + 4 > $length) {
                        return 0;
                    }

                    $bytes = substr($data, $offset, 4);

                    return $little
                        ? ord($bytes[0]) | (ord($bytes[1]) << 8) | (ord($bytes[2]) << 16) | (ord($bytes[3]) << 24)
                        : (ord($bytes[0]) << 24) | (ord($bytes[1]) << 16) | (ord($bytes[2]) << 8) | ord($bytes[3]);
                };

                $ifd0Offset = $uint32($tiff + 4);
                $numEntries = $ifd0Offset > 0 && $tiff + $ifd0Offset + 2 <= $length
                    ? ord($data[$tiff + $ifd0Offset]) | (ord($data[$tiff + $ifd0Offset + 1]) << 8)
                    : 0;

                for ($entry = 0; $entry < $numEntries; $entry++) {
                    $entryStart = $tiff + $ifd0Offset + 2 + ($entry * 12);
                    if ($entryStart + 12 > $length) {
                        break;
                    }

                    $tag = ord($data[$entryStart]) | (ord($data[$entryStart + 1]) << 8);

                    if ($tag === 0x0112) {
                        return ord($data[$entryStart + 8]) | (ord($data[$entryStart + 9]) << 8);
                    }
                }

                return 1;
            }

            $pos += 2 + $segLen;
        }

        return 1;
    }

    /**
     * Generate a unique URL-friendly slug for a blog post title.
     */
    private function makeBlogSlug(string $title, ?int $ignoreId = null): string
    {
        $base = \Illuminate\Support\Str::slug($title, '-') ?: 'post';
        $slug = $base;
        $i = 2;

        while (BlogPost::where('slug', $slug)
            ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
            ->pluck('slug')
            ->contains($slug)) {
            $slug = $base.'-'.$i++;
        }

        return $slug;
    }

    // ── Gallery Images CRUD ─────────────────────────────────

    public function galleryApiGateway(Request $request)
    {
        if ($request->expectsJson()) {
            if (auth('admin')->check()) {
                return $this->galleryIndex($request);
            }

            return response()->json([
                'message' => 'Unauthenticated.',
            ], 401);
        }

        return $this->galleryView();
    }

    public function galleryView()
    {
        return view('admin.gallery');
    }

    public function galleryIndex(Request $request)
    {
        $query = GalleryImage::where('seed', false);

        $images = $query->orderBy('sort_order')->latest()->paginate($this->perPage($request));

        return response()->json([
            'success' => true,
            'data' => $images->items(),
            'pagination' => [
                'total' => $images->total(),
                'per_page' => $images->perPage(),
                'current_page' => $images->currentPage(),
                'last_page' => $images->lastPage(),
            ],
        ]);
    }

    public function galleryStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:5120',
            'sort_order' => 'nullable|integer|min:1',
        ], [
            'image.required' => 'Gallery image is required.',
            'image.image' => 'File must be an image.',
            'image.mimes' => 'Image must be PNG, JPG, JPEG, or WebP.',
            'image.max' => 'Image must not exceed 5MB.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        $data['seed'] = false;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_'.preg_replace('/\s+/', '_', strtolower(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/pages/gallery'), $filename);
            $data['image'] = '/images/pages/gallery/'.$filename;
        }

        $image = GalleryImage::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Gallery image added successfully.',
            'data' => $image,
        ], 201);
    }

    public function galleryShow(GalleryImage $galleryImage)
    {
        if ($galleryImage->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed gallery images cannot be managed.',
            ], 403);
        }

        return response()->json([
            'success' => true,
            'data' => $galleryImage,
        ]);
    }

    public function galleryUpdate(Request $request, GalleryImage $galleryImage)
    {
        if ($galleryImage->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed gallery images cannot be managed.',
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5120',
            'sort_order' => 'nullable|integer|min:1',
        ], [
            'image.image' => 'File must be an image.',
            'image.mimes' => 'Image must be PNG, JPG, JPEG, or WebP.',
            'image.max' => 'Image must not exceed 5MB.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();

        if ($request->hasFile('image')) {
            if ($galleryImage->image && file_exists(public_path($galleryImage->image))) {
                unlink(public_path($galleryImage->image));
            }
            $file = $request->file('image');
            $filename = time().'_'.preg_replace('/\s+/', '_', strtolower(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/pages/gallery'), $filename);
            $data['image'] = '/images/pages/gallery/'.$filename;
        } else {
            unset($data['image']);
        }

        $galleryImage->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Gallery image updated successfully.',
            'data' => $galleryImage,
        ]);
    }

    public function galleryDestroy(GalleryImage $galleryImage)
    {
        if ($galleryImage->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed gallery images cannot be managed.',
            ], 403);
        }

        if ($galleryImage->image && file_exists(public_path($galleryImage->image))) {
            unlink(public_path($galleryImage->image));
        }
        $galleryImage->delete();

        return response()->json([
            'success' => true,
            'message' => 'Gallery image deleted successfully.',
        ]);
    }

    // ── Blog Posts CRUD ────────────────────────────────────

    public function blogApiGateway(Request $request)
    {
        if ($request->expectsJson()) {
            if (auth('admin')->check()) {
                return $this->blogIndex($request);
            }

            return response()->json([
                'message' => 'Unauthenticated.',
            ], 401);
        }

        return $this->blogView();
    }

    public function blogView()
    {
        return view('admin.blogs');
    }

    public function blogIndex(Request $request)
    {
        $query = BlogPost::where('seed', false);

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('category', 'like', "%{$search}%");
            });
        }

        $posts = $query->orderBy('sort_order')->latest()->paginate($this->perPage($request));

        return response()->json([
            'success' => true,
            'data' => $posts->items(),
            'pagination' => [
                'total' => $posts->total(),
                'per_page' => $posts->perPage(),
                'current_page' => $posts->currentPage(),
                'last_page' => $posts->lastPage(),
            ],
        ]);
    }

    public function blogStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:5120',
            'description' => 'nullable|string',
            'author' => 'nullable|string|max:255',
            'published_date' => 'nullable|date',
            'sort_order' => 'nullable|integer|min:1',
        ], [
            'title.required' => 'Post title is required.',
            'category.required' => 'Category is required.',
            'image.required' => 'Blog image is required.',
            'image.image' => 'File must be an image.',
            'image.mimes' => 'Image must be PNG, JPG, JPEG, or WebP.',
            'image.max' => 'Image must not exceed 5MB.',
            'published_date.date' => 'Please enter a valid date.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        $data['seed'] = false;
        $data['slug'] = $this->makeBlogSlug($data['title']);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_'.preg_replace('/\s+/', '_', strtolower(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/home/blog'), $filename);
            $data['image'] = '/images/home/blog/'.$filename;
        }

        $post = BlogPost::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Blog post created successfully.',
            'data' => $post,
        ], 201);
    }

    public function blogShow(BlogPost $blogPost)
    {
        if ($blogPost->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed blog posts cannot be managed.',
            ], 403);
        }

        return response()->json([
            'success' => true,
            'data' => $blogPost,
        ]);
    }

    public function blogUpdate(Request $request, BlogPost $blogPost)
    {
        if ($blogPost->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed blog posts cannot be managed.',
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5120',
            'description' => 'nullable|string',
            'author' => 'nullable|string|max:255',
            'published_date' => 'nullable|date',
            'sort_order' => 'nullable|integer|min:1',
        ], [
            'title.required' => 'Post title is required.',
            'category.required' => 'Category is required.',
            'image.image' => 'File must be an image.',
            'image.mimes' => 'Image must be PNG, JPG, JPEG, or WebP.',
            'image.max' => 'Image must not exceed 5MB.',
            'published_date.date' => 'Please enter a valid date.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();

        if (! $blogPost->slug || $data['title'] !== $blogPost->title) {
            $data['slug'] = $this->makeBlogSlug($data['title'], $blogPost->id);
        }

        if ($request->hasFile('image')) {
            if ($blogPost->image && file_exists(public_path($blogPost->image))) {
                unlink(public_path($blogPost->image));
            }
            $file = $request->file('image');
            $filename = time().'_'.preg_replace('/\s+/', '_', strtolower(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/home/blog'), $filename);
            $data['image'] = '/images/home/blog/'.$filename;
        } else {
            unset($data['image']);
        }

        $blogPost->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Blog post updated successfully.',
            'data' => $blogPost,
        ]);
    }

    public function blogDestroy(BlogPost $blogPost)
    {
        if ($blogPost->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed blog posts cannot be managed.',
            ], 403);
        }

        if ($blogPost->image && file_exists(public_path($blogPost->image))) {
            unlink(public_path($blogPost->image));
        }
        $blogPost->delete();

        return response()->json([
            'success' => true,
            'message' => 'Blog post deleted successfully.',
        ]);
    }

    // ── Pricing Plans CRUD ─────────────────────────────────

    public function pricingApiGateway(Request $request)
    {
        if ($request->expectsJson()) {
            if (auth('admin')->check()) {
                return $this->pricingIndex($request);
            }

            return response()->json([
                'message' => 'Unauthenticated.',
            ], 401);
        }

        return $this->pricingView();
    }

    public function pricingView()
    {
        return view('admin.pricing-plans');
    }

    public function pricingIndex(Request $request)
    {
        $query = PricingPlan::where('seed', false);

        $plans = $query->orderBy('sort_order')->orderBy('id')->get();

        return response()->json([
            'success' => true,
            'data' => $plans,
        ]);
    }

    public function pricingStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'period' => 'nullable|string|max:255',
            'features' => 'nullable|string',
            'featured' => 'nullable|boolean',
            'sort_order' => 'nullable|integer|min:1',
        ], [
            'name.required' => 'Plan name is required.',
            'price.required' => 'Price is required.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $this->buildPricingData($validator->validated());
        $data['seed'] = false;

        $plan = PricingPlan::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Pricing plan created successfully.',
            'data' => $plan,
        ], 201);
    }

    public function pricingShow(PricingPlan $pricingPlan)
    {
        if ($pricingPlan->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed pricing plans cannot be managed.',
            ], 403);
        }

        return response()->json([
            'success' => true,
            'data' => $pricingPlan,
        ]);
    }

    public function pricingUpdate(Request $request, PricingPlan $pricingPlan)
    {
        if ($pricingPlan->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed pricing plans cannot be managed.',
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'period' => 'nullable|string|max:255',
            'features' => 'nullable|string',
            'featured' => 'nullable|boolean',
            'sort_order' => 'nullable|integer|min:1',
        ], [
            'name.required' => 'Plan name is required.',
            'price.required' => 'Price is required.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $pricingPlan->update($this->buildPricingData($validator->validated()));

        return response()->json([
            'success' => true,
            'message' => 'Pricing plan updated successfully.',
            'data' => $pricingPlan,
        ]);
    }

    public function pricingDestroy(PricingPlan $pricingPlan)
    {
        if ($pricingPlan->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed pricing plans cannot be managed.',
            ], 403);
        }

        $pricingPlan->delete();

        return response()->json([
            'success' => true,
            'message' => 'Pricing plan deleted successfully.',
        ]);
    }

    private function buildPricingData(array $data): array
    {
        $data['featured'] = isset($data['featured']) && $data['featured'];
        if (isset($data['features']) && is_string($data['features'])) {
            $lines = array_filter(array_map('trim', explode("\n", $data['features'])), fn ($line) => $line !== '');
            $data['features'] = array_values($lines);
        }

        return $data;
    }


    // ── FAQs CRUD ────────────────────────────────────────────

    public function faqApiGateway(Request $request)
    {
        if ($request->expectsJson()) {
            if (auth('admin')->check()) {
                return $this->faqIndex($request);
            }

            return response()->json([
                'message' => 'Unauthenticated.',
            ], 401);
        }

        return $this->faqView();
    }

    public function faqView()
    {
        return view('admin.faqs');
    }

    public function faqIndex(Request $request)
    {
        $query = Faq::query()->where('seed', false);

        $validator = Validator::make($request->all(), [
            'sort_order' => 'nullable|min:1',
        ]);

        $sortOrder = null;
        if ($validator->passes() && $request->has('sort_order')) {
            $sortOrder = $request->input('sort_order');
        }

        if ($sortOrder) {
            $query->where('sort_order', $sortOrder);
        }

        $faqs = $query->orderBy('sort_order')->orderBy('id')->paginate($this->perPage($request));

        return response()->json([
            'success' => true,
            'data' => $faqs->items(),
            'pagination' => [
                'current_page' => $faqs->currentPage(),
                'last_page' => $faqs->lastPage(),
                'per_page' => $faqs->perPage(),
                'total' => $faqs->total(),
            ],
        ]);
    }

    public function faqShow(Faq $faq)
    {
        if ($faq->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed FAQs cannot be managed.',
            ], 403);
        }

        return response()->json([
            'success' => true,
            'data' => $faq,
        ]);
    }

    public function faqStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'sort_order' => 'nullable|integer|min:1',
        ], [
            'question.required' => 'Question is required.',
            'answer.required' => 'Answer is required.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        $data['seed'] = false;

        $faq = Faq::create($data);

        return response()->json([
            'success' => true,
            'message' => 'FAQ added successfully.',
            'data' => $faq,
        ], 201);
    }

    public function faqUpdate(Request $request, Faq $faq)
    {
        if ($faq->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed FAQs cannot be managed.',
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'sort_order' => 'nullable|integer|min:1',
        ], [
            'question.required' => 'Question is required.',
            'answer.required' => 'Answer is required.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $faq->update($validator->validated());

        return response()->json([
            'success' => true,
            'message' => 'FAQ updated successfully.',
            'data' => $faq,
        ]);
    }

    public function faqDestroy(Faq $faq)
    {
        if ($faq->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed FAQs cannot be managed.',
            ], 403);
        }

        $faq->delete();

        return response()->json([
            'success' => true,
            'message' => 'FAQ deleted successfully.',
        ]);
    }
    // ── Marquee Items CRUD ─────────────────────────────────

    public function marqueeApiGateway(Request $request)
    {
        if ($request->expectsJson()) {
            if (auth('admin')->check()) {
                return $this->marqueeIndex($request);
            }

            return response()->json([
                'message' => 'Unauthenticated.',
            ], 401);
        }

        return $this->marqueeView();
    }

    public function marqueeView()
    {
        return view('admin.marquee');
    }

    public function marqueeIndex(Request $request)
    {
        $query = MarqueeItem::query()->where('seed', false);

        $items = $query->orderBy('sort_order')->orderBy('id')->paginate($this->perPage($request));

        return response()->json([
            'success' => true,
            'data' => $items->items(),
            'pagination' => [
                'current_page' => $items->currentPage(),
                'last_page' => $items->lastPage(),
                'per_page' => $items->perPage(),
                'total' => $items->total(),
            ],
        ]);
    }

    public function marqueeShow(MarqueeItem $marqueeItem)
    {
        if ($marqueeItem->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed marquee items cannot be managed.',
            ], 403);
        }

        return response()->json([
            'success' => true,
            'data' => $marqueeItem,
        ]);
    }

    public function marqueeStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required|string|max:255',
            'sort_order' => 'nullable|integer|min:1',
        ], [
            'text.required' => 'Text is required.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        $data['seed'] = false;

        $item = MarqueeItem::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Marquee item added successfully.',
            'data' => $item,
        ], 201);
    }

    public function marqueeUpdate(Request $request, MarqueeItem $marqueeItem)
    {
        if ($marqueeItem->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed marquee items cannot be managed.',
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'text' => 'required|string|max:255',
            'sort_order' => 'nullable|integer|min:1',
        ], [
            'text.required' => 'Text is required.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $marqueeItem->update($validator->validated());

        return response()->json([
            'success' => true,
            'message' => 'Marquee item updated successfully.',
            'data' => $marqueeItem,
        ]);
    }

    public function marqueeDestroy(MarqueeItem $marqueeItem)
    {
        if ($marqueeItem->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed marquee items cannot be managed.',
            ], 403);
        }

        $marqueeItem->delete();

        return response()->json([
            'success' => true,
            'message' => 'Marquee item deleted successfully.',
        ]);
    }

    // ── Locations CRUD ─────────────────────────────────────

    public function locationApiGateway(Request $request)
    {
        if ($request->expectsJson()) {
            if (auth('admin')->check()) {
                return $this->locationIndex($request);
            }

            return response()->json([
                'message' => 'Unauthenticated.',
            ], 401);
        }

        return $this->locationView();
    }

    public function locationView()
    {
        return view('admin.locations');
    }

    public function locationIndex(Request $request)
    {
        $query = Location::where('seed', false);

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('region', 'like', "%{$search}%")
                    ->orWhere('address', 'like', "%{$search}%");
            });
        }

        $locations = $query->orderBy('sort_order')->orderBy('id')->get();

        return response()->json([
            'success' => true,
            'data' => $locations,
        ]);
    }

    public function locationStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'region' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'phone1' => 'nullable|string|max:100',
            'phone2' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:255',
            'directions_link' => 'nullable|url|max:1000',
            'color' => 'nullable|string|in:blue,purple,emerald,indigo,rose,amber',
            'sort_order' => 'nullable|integer|min:1',
        ], [
            'name.required' => 'Location name is required.',
            'email.email' => 'Please enter a valid email address.',
            'directions_link.url' => 'Please enter a valid URL.',
            'color.in' => 'Invalid color selected.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        $data['seed'] = false;

        $location = Location::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Location created successfully.',
            'data' => $location,
        ], 201);
    }

    public function locationShow(Location $location)
    {
        if ($location->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed locations cannot be managed.',
            ], 403);
        }

        return response()->json([
            'success' => true,
            'data' => $location,
        ]);
    }

    public function locationUpdate(Request $request, Location $location)
    {
        if ($location->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed locations cannot be managed.',
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'region' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'phone1' => 'nullable|string|max:100',
            'phone2' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:255',
            'directions_link' => 'nullable|url|max:1000',
            'color' => 'nullable|string|in:blue,purple,emerald,indigo,rose,amber',
            'sort_order' => 'nullable|integer|min:1',
        ], [
            'name.required' => 'Location name is required.',
            'email.email' => 'Please enter a valid email address.',
            'directions_link.url' => 'Please enter a valid URL.',
            'color.in' => 'Invalid color selected.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $location->update($validator->validated());

        return response()->json([
            'success' => true,
            'message' => 'Location updated successfully.',
            'data' => $location,
        ]);
    }

    public function locationDestroy(Location $location)
    {
        if ($location->seed) {
            return response()->json([
                'success' => false,
                'message' => 'Seed locations cannot be managed.',
            ], 403);
        }

        $location->delete();

        return response()->json([
            'success' => true,
            'message' => 'Location deleted successfully.',
        ]);
    }
}
