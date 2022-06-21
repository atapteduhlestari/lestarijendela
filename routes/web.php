<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductSubCategoryController;
use App\Http\Controllers\FaqController;

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
    Route::get('/product-image/create/{product}', [ProductController::class, 'createImage']);
    Route::post('/product-image', [ProductController::class, 'saveImage']);
    Route::delete('/product-image/{id}', [ProductController::class, 'deleteImage']);

    Route::resource('/post', PostController::class);
    Route::resource('/post-category', PostCategoryController::class);
    Route::get('/post-image/create/{post}', [PostController::class, 'createImage']);
    Route::post('/post-image', [PostController::class, 'saveImage']);
    Route::delete('/post-image/{id}', [PostController::class, 'deleteImage']);


    //ary sitepu
    Route::resource('/profile', ProfileController::class);
    Route::resource('/faq', FaqController::class);
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
