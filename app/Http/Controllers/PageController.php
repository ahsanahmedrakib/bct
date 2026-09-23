<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Faq;
use App\Models\GalleryImage;
use App\Models\Location;
use App\Models\PricingPlan;
use App\Models\TeamMember;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.pages.about');
    }

    public function services()
    {
        return view('pages.pages.services');
    }

    public function projects()
    {
        return view('pages.pages.projects');
    }

    public function caseStudies()
    {
        return view('pages.pages.case-studies');
    }

    public function pricing()
    {
        // If admin (non-seed) plans exist, only admin plans are shown on
        // the public pricing page. Otherwise the seed plans are shown.
        $query = PricingPlan::query();
        if (PricingPlan::where('seed', false)->exists()) {
            $query->where('seed', false);
        }

        $plans = $query->orderBy('sort_order')->orderBy('id')->get();

        return view('pages.pages.pricing', compact('plans'));
    }

    public function team()
    {
        // If admin (non-seed) team members exist, only admin members are
        // shown on the public team page. Otherwise the seed members are shown.
        $teamQuery = TeamMember::query();
        if (TeamMember::where('seed', false)->exists()) {
            $teamQuery->where('seed', false);
        }

        $teamMembers = $teamQuery->orderBy('sort_order')->orderBy('id')->get();

        return view('pages.pages.team', compact('teamMembers'));
    }

    public function faq()
    {
        // If admin (non-seed) FAQs exist, only admin FAQs are shown on the
        // public FAQ page. Otherwise the seed FAQs are shown.
        $query = Faq::query();
        if (Faq::where('seed', false)->exists()) {
            $query->where('seed', false);
        }

        $faqs = $query->orderBy('sort_order')->orderBy('id')->get()
            ->mapWithKeys(function ($faq) {
                return [$faq->question => $faq->answer];
            })
            ->toArray();

        return view('pages.pages.faq', compact('faqs'));
    }

    public function gallery()
    {
        // If admin (non-seed) images exist, only admin images are shown
        // on the public gallery page. Otherwise the seed images are shown.
        $query = GalleryImage::query();
        if (GalleryImage::where('seed', false)->exists()) {
            $query->where('seed', false);
        }

        $galleryImages = $query->orderBy('sort_order')->orderBy('id')
            ->pluck('image')
            ->toArray();

        return view('pages.pages.gallery', compact('galleryImages'));
    }

    public function blogs()
    {
        // If admin (non-seed) posts exist, only admin posts are shown on
        // the public blogs page. Otherwise the seed posts are shown.
        $query = BlogPost::query();
        if (BlogPost::where('seed', false)->exists()) {
            $query->where('seed', false);
        }

        $blogs = $query->orderBy('sort_order')->orderBy('id')->get()->map(function ($post) {
            return [
                'slug' => $post->slug,
                'image' => $post->image,
                'category' => $post->category,
                'title' => $post->title,
                'desc' => $post->description,
                'author' => $post->author,
                'day' => $post->published_date ? $post->published_date->format('d') : '',
                'month' => $post->published_date ? strtoupper($post->published_date->format('M')) : '',
            ];
        })->toArray();

        return view('pages.pages.blogs', compact('blogs'));
    }

    public function blogShow(string $slug)
    {
        $blog = BlogPost::where('slug', $slug)->firstOrFail();

        return view('pages.pages.blog-show', compact('blog'));
    }

    public function ourLocations()
    {
        // If admin (non-seed) locations exist, only admin locations are
        // shown on the public page. Otherwise the seed locations are shown.
        $query = Location::query();
        if (Location::where('seed', false)->exists()) {
            $query->where('seed', false);
        }

        $locations = $query->orderBy('sort_order')->orderBy('id')->get()->map(function ($loc) {
            return [
                'name' => $loc->name,
                'region' => $loc->region,
                'address' => $loc->address,
                'phone1' => $loc->phone1,
                'phone2' => $loc->phone2,
                'email' => $loc->email,
                'directions_link' => $loc->directions_link,
                'color' => $loc->color,
                'directions_label' => $loc->directions_label ?: 'Get Directions',
            ];
        })->toArray();

        return view('pages.pages.our-locations', compact('locations'));
    }
}
