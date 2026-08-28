<?php

namespace App\Http\Controllers;

class IndustriesController extends Controller
{
    public function index()
    {
        return view('pages.industries.index');
    }

    public function agriculture()
    {
        return view('pages.industries.agriculture');
    }

    public function professionalServices()
    {
        return view('pages.industries.professional-services');
    }

    public function transportation()
    {
        return view('pages.industries.transportation');
    }

    public function agedCare()
    {
        return view('pages.industries.aged-care');
    }

    public function medical()
    {
        return view('pages.industries.medical');
    }

    public function veterinary()
    {
        return view('pages.industries.veterinary');
    }

    public function realEstate()
    {
        return view('pages.industries.real-estate');
    }

    public function engineering()
    {
        return view('pages.industries.engineering');
    }

    public function accountants()
    {
        return view('pages.industries.accountants');
    }

    public function construction()
    {
        return view('pages.industries.construction');
    }

    public function nonProfit()
    {
        return view('pages.industries.non-profit');
    }
}
