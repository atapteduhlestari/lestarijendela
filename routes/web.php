<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductSubCategoryController;

Route::get('/', function () {
    echo 'lestari jendela';
});

Route::get('/home', function () {
    echo 'lestari jendela';
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/product', ProductController::class);
    Route::resource('/product-category', ProductCategoryController::class);
    Route::resource('/product-sub-category', ProductSubCategoryController::class);

    //ary sitepu
    Route::resource('/profile', ProfileController::class);
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
