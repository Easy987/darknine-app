<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('darknine.')->group(function() {
    Route::get('/', static function () {
        return view('index');
    })->name('index');

    Route::get('/galeria', static function () {
        return view('gallery');
    })->name('gallery');
});
