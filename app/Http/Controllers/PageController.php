<?php

namespace App\Http\Controllers;

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
        return view('pages.pages.pricing');
    }

    public function team()
    {
        return view('pages.pages.team');
    }

    public function faq()
    {
        return view('pages.pages.faq');
    }

    public function gallery()
    {
        return view('pages.pages.gallery');
    }
}
