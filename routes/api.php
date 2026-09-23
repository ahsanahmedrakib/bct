<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| JWT-protected admin endpoints. Authentication is handled through
| tymon/jwt-auth using the `admin` guard defined in config/auth.php.
|
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::post('login', [AdminAuthController::class, 'login'])->name('login.api');

    // The refresh endpoint must NOT be behind auth:admin — refreshing an
    // already-expired token requires the request to reach the controller
    // without the middleware rejecting it as unauthenticated.
    Route::post('refresh', [AdminAuthController::class, 'refresh'])->name('refresh');

    Route::middleware('auth:admin')->group(function () {
        Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');

        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('messages', [AdminController::class, 'index'])->name('messages');
        Route::get('messages/{message}', [AdminController::class, 'show'])->name('messages.show');
        Route::patch('messages/{message}/read', [AdminController::class, 'markRead'])->name('messages.read');
        Route::patch('messages/{message}/unread', [AdminController::class, 'markUnread'])->name('messages.unread');
        Route::delete('messages/{message}', [AdminController::class, 'destroy'])->name('messages.destroy');

        Route::get('projects/{project}', [AdminController::class, 'projectShow'])->name('projects.show');
        Route::post('projects', [AdminController::class, 'projectStore'])->name('projects.store');
        Route::post('projects/{project}', [AdminController::class, 'projectUpdate'])->name('projects.update');
        Route::delete('projects/{project}', [AdminController::class, 'projectDestroy'])->name('projects.destroy');

        Route::get('categories/options', [AdminController::class, 'categoryOptions'])->name('categories.options');
        Route::post('categories', [AdminController::class, 'categoryStore'])->name('categories.store');
        Route::get('categories/{category}', [AdminController::class, 'categoryShow'])->name('categories.show');
        Route::post('categories/{category}', [AdminController::class, 'categoryUpdate'])->name('categories.update');
        Route::delete('categories/{category}', [AdminController::class, 'categoryDestroy'])->name('categories.destroy');

        Route::get('team/{teamMember}', [AdminController::class, 'teamShow'])->name('team.show');
        Route::post('team', [AdminController::class, 'teamStore'])->name('team.store');
        Route::post('team/{teamMember}', [AdminController::class, 'teamUpdate'])->name('team.update');
        Route::delete('team/{teamMember}', [AdminController::class, 'teamDestroy'])->name('team.destroy');

        Route::get('hero-slides/{heroSlide}', [AdminController::class, 'heroSlideShow'])->name('hero-slides.show');
        Route::post('hero-slides', [AdminController::class, 'heroSlideStore'])->name('hero-slides.store');
        Route::post('hero-slides/{heroSlide}', [AdminController::class, 'heroSlideUpdate'])->name('hero-slides.update');
        Route::delete('hero-slides/{heroSlide}', [AdminController::class, 'heroSlideDestroy'])->name('hero-slides.destroy');

        Route::get('gallery/{galleryImage}', [AdminController::class, 'galleryShow'])->name('gallery.show');
        Route::post('gallery', [AdminController::class, 'galleryStore'])->name('gallery.store');
        Route::post('gallery/{galleryImage}', [AdminController::class, 'galleryUpdate'])->name('gallery.update');
        Route::delete('gallery/{galleryImage}', [AdminController::class, 'galleryDestroy'])->name('gallery.destroy');

        Route::get('blogs/{blogPost}', [AdminController::class, 'blogShow'])->name('blogs.show');
        Route::post('blogs', [AdminController::class, 'blogStore'])->name('blogs.store');
        Route::post('blogs/{blogPost}', [AdminController::class, 'blogUpdate'])->name('blogs.update');
        Route::delete('blogs/{blogPost}', [AdminController::class, 'blogDestroy'])->name('blogs.destroy');

        Route::get('pricing-plans/{pricingPlan}', [AdminController::class, 'pricingShow'])->name('pricing-plans.show');
        Route::post('pricing-plans', [AdminController::class, 'pricingStore'])->name('pricing-plans.store');
        Route::post('pricing-plans/{pricingPlan}', [AdminController::class, 'pricingUpdate'])->name('pricing-plans.update');
        Route::delete('pricing-plans/{pricingPlan}', [AdminController::class, 'pricingDestroy'])->name('pricing-plans.destroy');

        Route::get('locations/{location}', [AdminController::class, 'locationShow'])->name('locations.show');
        Route::post('locations', [AdminController::class, 'locationStore'])->name('locations.store');
        Route::post('locations/{location}', [AdminController::class, 'locationUpdate'])->name('locations.update');
        Route::delete('locations/{location}', [AdminController::class, 'locationDestroy'])->name('locations.destroy');

        Route::get('faqs/{faq}', [AdminController::class, 'faqShow'])->name('faqs.show');
        Route::post('faqs', [AdminController::class, 'faqStore'])->name('faqs.store');
        Route::post('faqs/{faq}', [AdminController::class, 'faqUpdate'])->name('faqs.update');
        Route::delete('faqs/{faq}', [AdminController::class, 'faqDestroy'])->name('faqs.destroy');

        Route::get('marquee/{marqueeItem}', [AdminController::class, 'marqueeShow'])->name('marquee.show');
        Route::post('marquee', [AdminController::class, 'marqueeStore'])->name('marquee.store');
        Route::post('marquee/{marqueeItem}', [AdminController::class, 'marqueeUpdate'])->name('marquee.update');
        Route::delete('marquee/{marqueeItem}', [AdminController::class, 'marqueeDestroy'])->name('marquee.destroy');
    });
});