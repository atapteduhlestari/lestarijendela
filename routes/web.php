<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo 'lestari jendela';
});

Route::get('/home', function () {
    echo 'lestari jendela';
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/product', ProductController::class);

    //ary sitepu
    Route::resource('/profile', ProfileController::class);
    Route::resource('/product-category', ProductCategoryController::class);

});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
