<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/post', [PostController::class, 'index'])->name('post');
    Route::get('/dashboard/post/add', [PostController::class, 'addpost'])->name('addpost');
    Route::get('/dashboard/categories', [CategoriesController::class, 'index'])->name('categories');
    Route::get('/dashboard/users', [UsersController::class, 'index'])->name('users');
});
