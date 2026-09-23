<?php

namespace App\Http\Controllers;

use App\Models\HeroSlide;
use App\Models\MarqueeItem;
use App\Models\TeamMember;

class HomeController extends Controller
{
    public function index()
    {
        // If admin (non-seed) team members exist, only admin members are
        // shown. Otherwise the seed team members are shown.
        $teamQuery = TeamMember::query();
        if (TeamMember::where('seed', false)->exists()) {
            $teamQuery->where('seed', false);
        }

        $teamMembers = $teamQuery->orderBy('sort_order')->orderBy('id')->get();

        // If admin (non-seed) slides exist, only admin data is shown on
        // the public website. Otherwise the seed slides are shown.
        $query = HeroSlide::query();
        if (HeroSlide::where('seed', false)->exists()) {
            $query->where('seed', false);
        }

        $heroV2Slides = $query->orderBy('sort_order')->orderBy('id')
            ->get()
            ->map(function ($slide) {
                return [
                    'subtitle' => $slide->subtitle,
                    'title' => $slide->title,
                    'desc' => $slide->description,
                    'link' => $slide->link,
                    'image' => $slide->image,
                ];
            })
            ->toArray();

        // If admin (non-seed) marquee items exist, only admin items are
        // shown on the public website. Otherwise the seed items are shown.
        $marqueeQuery = MarqueeItem::query();
        if (MarqueeItem::where('seed', false)->exists()) {
            $marqueeQuery->where('seed', false);
        }

        $marqueeItems = $marqueeQuery->orderBy('sort_order')->orderBy('id')
            ->pluck('text')
            ->toArray();

        return view('pages.home', compact('teamMembers', 'heroV2Slides', 'marqueeItems'));
    }
}
