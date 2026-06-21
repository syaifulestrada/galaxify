<?php

use App\Http\Controllers\AboutUs\AboutUsController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\Service\ServiceController;
use App\Livewire\Posts\Postsindex;
use App\Livewire\Posts\ShowPost;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/aboutus', AboutUsController::class)->name('aboutus');

Route::resources([
    'projects' => ProjectController::class,
    'services' => ServiceController::class,
]);

Route::controller(MemberController::class)->group(function () {
    Route::get('/members', 'index')->name('members');
    Route::get('/members/{member}', 'show')->name('members.show');
});

Route::get('/posts', Postsindex::class)->name('posts.index');
Route::get('/posts/{slug}', ShowPost::class)->name('posts.show');
