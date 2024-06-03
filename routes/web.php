<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

Route::middleware("auth")->group(function () {
    // Logout
    Route::controller(AuthController::class)->group(function () {
        Route::get('/logout', 'logout')->name('logout');
    });

    // Category
    Route::controller(CategoryController::class)->name('category.')->prefix('category')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
    });

    // Product
    Route::controller(ProductController::class)->name('product.')->prefix('product')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'index')->name('create');
    });

    // Dashboard
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });
});

Route::middleware("guest")->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::get('/reset-password', 'resetPassword')->name('resetPassword');
        Route::get('/register', 'register')->name('register');
    });
});
