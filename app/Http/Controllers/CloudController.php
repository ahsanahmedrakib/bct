<?php

namespace App\Http\Controllers;

class CloudController extends Controller
{
    public function index()
    {
        return view('pages.cloud.index');
    }

    public function microsoftSolutions()
    {
        return view('pages.cloud.microsoft-solutions');
    }

    public function cyberSecurity()
    {
        return view('pages.cloud.cyber-security');
    }

    public function services()
    {
        return view('pages.cloud.services');
    }

    public function serviceEmailSignature()
    {
        return view('pages.cloud.service-email-signature');
    }

    public function serviceModernWorkplace()
    {
        return view('pages.cloud.service-modern-workplace');
    }

    public function msAzure()
    {
        return view('pages.cloud.ms-azure');
    }

    public function msConditionalAccess()
    {
        return view('pages.cloud.ms-conditional-access');
    }

    public function msCopilot()
    {
        return view('pages.cloud.ms-copilot');
    }

    public function msDefender()
    {
        return view('pages.cloud.ms-defender');
    }

    public function msEntraId()
    {
        return view('pages.cloud.ms-entra-id');
    }

    public function msExchangeOnline()
    {
        return view('pages.cloud.ms-exchange-online');
    }

    public function msIntune()
    {
        return view('pages.cloud.ms-intune');
    }

    public function msMicrosoft365()
    {
        return view('pages.cloud.ms-microsoft-365');
    }

    public function msOneDrive()
    {
        return view('pages.cloud.ms-onedrive');
    }

    public function msSharePoint()
    {
        return view('pages.cloud.ms-sharepoint');
    }

    public function msTeams()
    {
        return view('pages.cloud.ms-teams');
    }

    public function msWindows365()
    {
        return view('pages.cloud.ms-windows-365');
    }

    public function csBackupRecovery()
    {
        return view('pages.cloud.cs-backup-recovery');
    }

    public function csDisp()
    {
        return view('pages.cloud.cs-disp');
    }

    public function csEssentialEight()
    {
        return view('pages.cloud.cs-essential-eight');
    }

    public function csM365Security()
    {
        return view('pages.cloud.cs-m365-security');
    }

    public function csSecureScore()
    {
        return view('pages.cloud.cs-secure-score');
    }
}
