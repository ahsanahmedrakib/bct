<?php

namespace App\Http\Controllers;

class ItSupportController extends Controller
{
    public function index()
    {
        return view('pages.it-support.index');
    }

    public function cyberSecurity()
    {
        return view('pages.it-support.cyber-security');
    }

    public function managedIt()
    {
        return view('pages.it-support.managed-it');
    }

    public function deviceRepair()
    {
        return view('pages.it-support.device-repair');
    }

    public function serversNetworking()
    {
        return view('pages.it-support.servers-networking');
    }

    public function csCloudNetwork()
    {
        return view('pages.it-support.cs-cloud-network');
    }

    public function csEndpoint()
    {
        return view('pages.it-support.cs-endpoint');
    }

    public function csEssentialEight()
    {
        return view('pages.it-support.cs-essential-eight');
    }

    public function csIncidentResponse()
    {
        return view('pages.it-support.cs-incident-response');
    }

    public function csSecurityAwareness()
    {
        return view('pages.it-support.cs-security-awareness');
    }

    public function csZeroTrust()
    {
        return view('pages.it-support.cs-zero-trust');
    }
}
