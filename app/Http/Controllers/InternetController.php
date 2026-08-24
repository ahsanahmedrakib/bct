<?php

namespace App\Http\Controllers;

class InternetController extends Controller
{
    public function index()
    {
        return view('pages.internet.index');
    }

    public function nbn()
    {
        return view('pages.internet.nbn');
    }

    public function nbnBusiness()
    {
        return view('pages.internet.nbn-business');
    }

    public function nbnEnterpriseFibre()
    {
        return view('pages.internet.nbn-enterprise-fibre');
    }

    public function nbnFreeFibreUpgrade()
    {
        return view('pages.internet.nbn-free-fibre-upgrade');
    }

    public function nbnFixedWireless()
    {
        return view('pages.internet.nbn-fixed-wireless');
    }

    public function nbnHomeSmall()
    {
        return view('pages.internet.nbn-home-small');
    }

    public function nbnOrder()
    {
        return view('pages.internet.nbn-order');
    }

    public function nbnSkyMuster()
    {
        return view('pages.internet.nbn-sky-muster');
    }

    public function fourFiveG()
    {
        return view('pages.internet.four-five-g');
    }

    public function celFi()
    {
        return view('pages.internet.cel-fi');
    }

    public function starlink()
    {
        return view('pages.internet.starlink');
    }
}
