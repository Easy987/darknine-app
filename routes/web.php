<?php

use App\Http\Controllers\App\Auth\LoginController;
use App\Http\Controllers\App\PageController;
use App\Http\Controllers\App\UserController;
use App\Http\Controllers\App\GalleryController;
use App\Http\Controllers\App\Auth\SocialController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::name('darknine.app.')->group(function() {
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/rolunk', [PageController::class, 'about'])->name('about');
    Route::get('/kapcsolat', [PageController::class, 'contact'])->name('contact');
    Route::get('/galeria', [GalleryController::class, 'index'])->name('gallery');
    Route::get('/profil', [UserController::class, 'index'])->name('profile');

    Route::name('auth.')->group(function() {
        Route::get('/bejelentkezes', [LoginController::class, 'showLoginForm'])->name('showLoginForm');
        Route::post('/bejelentkezes', [LoginController::class, 'login'])->name('login');

        Route::get('/kijelentkezes', [LoginController::class, 'logout'])->name('logout');

        Route::prefix('auth')->group(function() {
            Route::prefix('social')->name('social.')->group(function() {
                Route::get('/{provider}', [SocialController::class, 'redirect'])->name('redirect');
                Route::get('/{provider}/callback', [SocialController::class, 'login'])->name('callback');
            });
        });
    });

    /*Route::get('/bejelentkezes', [\App\Http\Controllers\App\UserController::class, 'showLoginForm']);
    Route::get('/regisztracio', [\App\Http\Controllers\App\UserController::class, 'showRegisterForm']);*/
});

Auth::routes();

