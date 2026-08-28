<?php

use Illuminate\Support\Facades\Route;

// ─── Home & Contact ─────────────────────────────────────────────
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.submit');
Route::get('/industries', [App\Http\Controllers\IndustriesController::class, 'index'])->name('industries');
Route::prefix('industries')->name('industries.')->group(function () {
    Route::get('/it-for-agriculture', [App\Http\Controllers\IndustriesController::class, 'agriculture'])->name('agriculture');
    Route::get('/it-support-for-professional-services', [App\Http\Controllers\IndustriesController::class, 'professionalServices'])->name('professional-services');
    Route::get('/it-for-transportation', [App\Http\Controllers\IndustriesController::class, 'transportation'])->name('transportation');
    Route::get('/it-support-for-aged-care', [App\Http\Controllers\IndustriesController::class, 'agedCare'])->name('aged-care');
    Route::get('/it-support-for-medical', [App\Http\Controllers\IndustriesController::class, 'medical'])->name('medical');
    Route::get('/it-support-for-veterinary', [App\Http\Controllers\IndustriesController::class, 'veterinary'])->name('veterinary');
    Route::get('/it-support-for-real-estate', [App\Http\Controllers\IndustriesController::class, 'realEstate'])->name('real-estate');
    Route::get('/it-support-for-engineering', [App\Http\Controllers\IndustriesController::class, 'engineering'])->name('engineering');
    Route::get('/it-support-for-accountants', [App\Http\Controllers\IndustriesController::class, 'accountants'])->name('accountants');
    Route::get('/it-support-for-construction', [App\Http\Controllers\IndustriesController::class, 'construction'])->name('construction');
    Route::get('/it-support-for-non-profit', [App\Http\Controllers\IndustriesController::class, 'nonProfit'])->name('non-profit');
});

// ─── IT Support ─────────────────────────────────────────────────
Route::get('/it-support', [App\Http\Controllers\ItSupportController::class, 'index'])->name('it-support');
Route::prefix('it-support')->name('it-support.')->group(function () {
    Route::get('/cyber-security', [App\Http\Controllers\ItSupportController::class, 'cyberSecurity'])->name('cyber-security');
    Route::get('/cyber-security/cloud-and-network-security', [App\Http\Controllers\ItSupportController::class, 'csCloudNetwork'])->name('cs-cloud-network');
    Route::get('/cyber-security/endpoint-security', [App\Http\Controllers\ItSupportController::class, 'csEndpoint'])->name('cs-endpoint');
    Route::get('/cyber-security/essential-eight', [App\Http\Controllers\ItSupportController::class, 'csEssentialEight'])->name('cs-essential-eight');
    Route::get('/cyber-security/incident-response', [App\Http\Controllers\ItSupportController::class, 'csIncidentResponse'])->name('cs-incident-response');
    Route::get('/cyber-security/security-awareness-training', [App\Http\Controllers\ItSupportController::class, 'csSecurityAwareness'])->name('cs-security-awareness');
    Route::get('/cyber-security/zero-trust-framework', [App\Http\Controllers\ItSupportController::class, 'csZeroTrust'])->name('cs-zero-trust');
    Route::get('/device-repair', [App\Http\Controllers\ItSupportController::class, 'deviceRepair'])->name('device-repair');
    Route::get('/managed-it', [App\Http\Controllers\ItSupportController::class, 'managedIt'])->name('managed-it');
    Route::get('/servers-and-networking', [App\Http\Controllers\ItSupportController::class, 'serversNetworking'])->name('servers-networking');
});

// ─── Voice ──────────────────────────────────────────────────────
Route::get('/voice', [App\Http\Controllers\VoiceController::class, 'index'])->name('voice');
Route::prefix('voice')->name('voice.')->group(function () {
    Route::get('/phone-systems', [App\Http\Controllers\VoiceController::class, 'phoneSystems'])->name('phone-systems');
    Route::get('/phone-systems/small-business', [App\Http\Controllers\VoiceController::class, 'psSmallBusiness'])->name('ps-small-business');
    Route::get('/phone-systems/medium-business', [App\Http\Controllers\VoiceController::class, 'psMediumBusiness'])->name('ps-medium-business');
    Route::get('/phone-systems/enterprise-business', [App\Http\Controllers\VoiceController::class, 'psEnterpriseBusiness'])->name('ps-enterprise-business');
    Route::get('/brands', [App\Http\Controllers\VoiceController::class, 'brands'])->name('brands');
    Route::get('/brands/avaya', [App\Http\Controllers\VoiceController::class, 'brandAvaya'])->name('brand-avaya');
    Route::get('/brands/grandstream', [App\Http\Controllers\VoiceController::class, 'brandGrandstream'])->name('brand-grandstream');
    Route::get('/brands/lg-ipecs', [App\Http\Controllers\VoiceController::class, 'brandLgIpecs'])->name('brand-lg-ipecs');
    Route::get('/brands/vodia', [App\Http\Controllers\VoiceController::class, 'brandVodia'])->name('brand-vodia');
    Route::get('/features/conferencing-solutions', [App\Http\Controllers\VoiceController::class, 'featureConferencing'])->name('feature-conferencing');
    Route::get('/features/hold-music', [App\Http\Controllers\VoiceController::class, 'featureHoldMusic'])->name('feature-hold-music');
    Route::get('/features/microsoft-teams', [App\Http\Controllers\VoiceController::class, 'featureMicrosoftTeams'])->name('feature-microsoft-teams');
    Route::get('/features/more-features', [App\Http\Controllers\VoiceController::class, 'featureMoreFeatures'])->name('feature-more-features');
    Route::get('/features/unified-comms', [App\Http\Controllers\VoiceController::class, 'featureUnifiedComms'])->name('feature-unified-comms');
    Route::get('/hardware/celfi-4g-repeater', [App\Http\Controllers\VoiceController::class, 'hardwareCelFi'])->name('hardware-celfi');
    Route::get('/hardware/cordless-phones', [App\Http\Controllers\VoiceController::class, 'hardwareCordless'])->name('hardware-cordless');
    Route::get('/hardware/headsets', [App\Http\Controllers\VoiceController::class, 'hardwareHeadsets'])->name('hardware-headsets');
});

// ─── Internet ───────────────────────────────────────────────────
Route::get('/internet', [App\Http\Controllers\InternetController::class, 'index'])->name('internet');
Route::prefix('internet')->name('internet.')->group(function () {
    Route::get('/4g-5g-internet', [App\Http\Controllers\InternetController::class, 'fourFiveG'])->name('4g-5g');
    Route::get('/cel-fi', [App\Http\Controllers\InternetController::class, 'celFi'])->name('cel-fi');
    Route::get('/starlink', [App\Http\Controllers\InternetController::class, 'starlink'])->name('starlink');
    Route::get('/nbn', [App\Http\Controllers\InternetController::class, 'nbn'])->name('nbn');
    Route::get('/nbn/business', [App\Http\Controllers\InternetController::class, 'nbnBusiness'])->name('nbn-business');
    Route::get('/nbn/enterprise-fibre', [App\Http\Controllers\InternetController::class, 'nbnEnterpriseFibre'])->name('nbn-enterprise-fibre');
    Route::get('/nbn/free-fibre-upgrade', [App\Http\Controllers\InternetController::class, 'nbnFreeFibreUpgrade'])->name('nbn-free-fibre-upgrade');
    Route::get('/nbn/fixed-wireless', [App\Http\Controllers\InternetController::class, 'nbnFixedWireless'])->name('nbn-fixed-wireless');
    Route::get('/nbn/home-small-business', [App\Http\Controllers\InternetController::class, 'nbnHomeSmall'])->name('nbn-home-small');
    Route::get('/nbn/order', [App\Http\Controllers\InternetController::class, 'nbnOrder'])->name('nbn-order');
    Route::get('/nbn/sky-muster', [App\Http\Controllers\InternetController::class, 'nbnSkyMuster'])->name('nbn-sky-muster');
});

// ─── Cloud ──────────────────────────────────────────────────────
Route::get('/cloud', [App\Http\Controllers\CloudController::class, 'index'])->name('cloud');
Route::prefix('cloud')->name('cloud.')->group(function () {
    Route::get('/services', [App\Http\Controllers\CloudController::class, 'services'])->name('services');
    Route::get('/services/email-signature', [App\Http\Controllers\CloudController::class, 'serviceEmailSignature'])->name('service-email-signature');
    Route::get('/services/modern-workplace', [App\Http\Controllers\CloudController::class, 'serviceModernWorkplace'])->name('service-modern-workplace');
    Route::get('/microsoft-solutions', [App\Http\Controllers\CloudController::class, 'microsoftSolutions'])->name('microsoft-solutions');
    Route::get('/microsoft-solutions/azure', [App\Http\Controllers\CloudController::class, 'msAzure'])->name('ms-azure');
    Route::get('/microsoft-solutions/conditional-access', [App\Http\Controllers\CloudController::class, 'msConditionalAccess'])->name('ms-conditional-access');
    Route::get('/microsoft-solutions/copilot', [App\Http\Controllers\CloudController::class, 'msCopilot'])->name('ms-copilot');
    Route::get('/microsoft-solutions/defender', [App\Http\Controllers\CloudController::class, 'msDefender'])->name('ms-defender');
    Route::get('/microsoft-solutions/entra-id', [App\Http\Controllers\CloudController::class, 'msEntraId'])->name('ms-entra-id');
    Route::get('/microsoft-solutions/exchange-online', [App\Http\Controllers\CloudController::class, 'msExchangeOnline'])->name('ms-exchange-online');
    Route::get('/microsoft-solutions/intune', [App\Http\Controllers\CloudController::class, 'msIntune'])->name('ms-intune');
    Route::get('/microsoft-solutions/microsoft-365', [App\Http\Controllers\CloudController::class, 'msMicrosoft365'])->name('ms-microsoft-365');
    Route::get('/microsoft-solutions/onedrive', [App\Http\Controllers\CloudController::class, 'msOneDrive'])->name('ms-onedrive');
    Route::get('/microsoft-solutions/sharepoint', [App\Http\Controllers\CloudController::class, 'msSharePoint'])->name('ms-sharepoint');
    Route::get('/microsoft-solutions/teams', [App\Http\Controllers\CloudController::class, 'msTeams'])->name('ms-teams');
    Route::get('/microsoft-solutions/windows-365', [App\Http\Controllers\CloudController::class, 'msWindows365'])->name('ms-windows-365');
    Route::get('/cyber-security', [App\Http\Controllers\CloudController::class, 'cyberSecurity'])->name('cyber-security');
    Route::get('/cyber-security/backup-recovery', [App\Http\Controllers\CloudController::class, 'csBackupRecovery'])->name('cs-backup-recovery');
    Route::get('/cyber-security/disp', [App\Http\Controllers\CloudController::class, 'csDisp'])->name('cs-disp');
    Route::get('/cyber-security/essential-eight', [App\Http\Controllers\CloudController::class, 'csEssentialEight'])->name('cs-essential-eight');
    Route::get('/cyber-security/m365-security', [App\Http\Controllers\CloudController::class, 'csM365Security'])->name('cs-m365-security');
    Route::get('/cyber-security/secure-score', [App\Http\Controllers\CloudController::class, 'csSecureScore'])->name('cs-secure-score');
});

// ─── Web ────────────────────────────────────────────────────────
Route::get('/web', [App\Http\Controllers\WebController::class, 'index'])->name('web');
Route::prefix('web')->name('web.')->group(function () {
    Route::get('/development', [App\Http\Controllers\WebController::class, 'development'])->name('development');
    Route::get('/ecommerce', [App\Http\Controllers\WebController::class, 'ecommerce'])->name('ecommerce');
    Route::get('/hosting', [App\Http\Controllers\WebController::class, 'hosting'])->name('hosting');
    Route::get('/portfolio', [App\Http\Controllers\WebController::class, 'portfolio'])->name('portfolio');
    Route::get('/seo', [App\Http\Controllers\WebController::class, 'seo'])->name('seo');
});

Route::fallback(function () {
    return response()->view('pages.404', [], 404);
});
