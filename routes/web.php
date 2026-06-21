<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Livewire\Posts\Postsindex;
use App\Livewire\Posts\ShowPost;
use Illuminate\Support\Facades\Route;

Route::resources([
    'projects' => ProjectController::class,
]);

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

Route::controller(MemberController::class)->group(function () {
    Route::get('/members', 'index')->name('members');
    Route::get('/members/{member}', 'show')->name('members.show');
});

Route::get('/posts', Postsindex::class)->name('posts.index');
Route::get('/posts/{slug}', ShowPost::class)->name('posts.show');
