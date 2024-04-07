<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/landingpage', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
