<?php

use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo 'lestari jendela';
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::resource('/product', ProductController::class);
    Route::resource('/category', ProductCategoryController::class)->parameters([
        'ProductCategory' => 'category',
    ]);
    

    //ary sitepu
    Route::resource('/profile', ProfileController::class);
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
