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

    public function miManagedItServices()
    {
        return view('pages.it-support.mi-managed-it-services');
    }

    public function miProcurement()
    {
        return view('pages.it-support.mi-procurement');
    }

    public function miHelpDeskSupport()
    {
        return view('pages.it-support.mi-help-desk-support');
    }

    public function miDataManagement()
    {
        return view('pages.it-support.mi-data-management');
    }

    public function miItConsulting()
    {
        return view('pages.it-support.mi-it-consulting');
    }

    public function miItOutsourcing()
    {
        return view('pages.it-support.mi-it-outsourcing');
    }

    public function snNetworkConsultingDesign()
    {
        return view('pages.it-support.sn-network-consulting-design');
    }

    public function snNetworkInstallation()
    {
        return view('pages.it-support.sn-network-installation');
    }

    public function snWifiNetworking()
    {
        return view('pages.it-support.sn-wifi-networking');
    }

    public function snNetworkSecurity()
    {
        return view('pages.it-support.sn-network-security');
    }

    public function snVpnSolutions()
    {
        return view('pages.it-support.sn-vpn-solutions');
    }

    public function snWindowsServer()
    {
        return view('pages.it-support.sn-windows-server');
    }

    public function drVirusMalwareRemoval()
    {
        return view('pages.it-support.dr-virus-malware-removal');
    }

    public function drDataRecovery()
    {
        return view('pages.it-support.dr-data-recovery');
    }

    public function drUpgrades()
    {
        return view('pages.it-support.dr-upgrades');
    }

    public function drPcLaptopRepairs()
    {
        return view('pages.it-support.dr-pc-laptop-repairs');
    }
}
