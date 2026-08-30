<?php

namespace App\Http\Controllers;

class VoiceController extends Controller
{
    public function index()
    {
        return view('pages.voice.index');
    }

    public function brands()
    {
        return view('pages.voice.brands');
    }

    public function brandAvaya()
    {
        return view('pages.voice.brand-avaya');
    }

    public function brandGrandstream()
    {
        return view('pages.voice.brand-grandstream');
    }

    public function brandLgIpecs()
    {
        return view('pages.voice.brand-lg-ipecs');
    }

    public function brandVodia()
    {
        return view('pages.voice.brand-vodia');
    }

    public function psSmallBusiness()
    {
        return view('pages.voice.ps-small-business');
    }

    public function psMediumBusiness()
    {
        return view('pages.voice.ps-medium-business');
    }

    public function psEnterpriseBusiness()
    {
        return view('pages.voice.ps-enterprise-business');
    }

    public function featureConferencing()
    {
        return view('pages.voice.feature-conferencing');
    }

    public function featureHoldMusic()
    {
        return view('pages.voice.feature-hold-music');
    }

    public function featureMicrosoftTeams()
    {
        return view('pages.voice.feature-microsoft-teams');
    }

    public function featureMoreFeatures()
    {
        return view('pages.voice.feature-more-features');
    }

    public function featureUnifiedComms()
    {
        return view('pages.voice.feature-unified-comms');
    }

    public function hardwareCelFi()
    {
        return view('pages.voice.hardware-celfi');
    }

    public function hardwareCordless()
    {
        return view('pages.voice.hardware-cordless');
    }

    public function hardwareHeadsets()
    {
        return view('pages.voice.hardware-headsets');
    }
}
