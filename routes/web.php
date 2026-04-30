<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::controller(ServiceController::class)->group(function () {
    Route::get('/services', 'index')->name('services');
});
