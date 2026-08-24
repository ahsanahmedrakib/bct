<?php

namespace App\Http\Controllers;

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
        return view('pages.web.portfolio');
    }
}
