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

    Route::middleware('auth:admin')->group(function () {
        Route::get('me', [AdminAuthController::class, 'me'])->name('me');
        Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::post('refresh', [AdminAuthController::class, 'refresh'])->name('refresh');

        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('messages', [AdminController::class, 'index'])->name('messages');
        Route::get('messages/{message}', [AdminController::class, 'show'])->name('messages.show');
        Route::patch('messages/{message}/read', [AdminController::class, 'markRead'])->name('messages.read');
        Route::patch('messages/{message}/unread', [AdminController::class, 'markUnread'])->name('messages.unread');
        Route::delete('messages/{message}', [AdminController::class, 'destroy'])->name('messages.destroy');
    });
});