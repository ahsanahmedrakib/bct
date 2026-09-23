<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;

class WebController extends Controller
{
    public function index()
    {
        return view('pages.web.index');
    }

    public function development()
    {
        return view('pages.web.development');
    }

    public function hosting()
    {
        return view('pages.web.hosting');
    }

    public function seo()
    {
        return view('pages.web.seo');
    }

    public function ecommerce()
    {
        return view('pages.web.ecommerce');
    }

    public function portfolio()
    {
        // If admin (non-seed) projects exist, only admin projects are shown
        // on the public portfolio page. Otherwise the seed projects are shown.
        $projectQuery = Project::with('category')->latest();
        if (Project::where('seed', false)->exists()) {
            $projectQuery->where('seed', false);
        }

        $projects = $projectQuery->get();

        // Only show categories that belong to the projects actually displayed.
        $categoryIds = $projects->pluck('category_id')->filter()->unique();
        $categories = Category::whereIn('id', $categoryIds)->orderBy('name')->get();

        return view('pages.web.portfolio', compact('projects', 'categories'));
    }
}
