<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(AboutUsController::class)->group(function () {
    Route::get('/aboutus', 'index')->name('aboutus');
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('/services', 'index')->name('services');
    Route::get('/services/{slug}', 'show')->name('services.show');
});
