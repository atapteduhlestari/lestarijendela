<?php

use App\Http\Controllers\BranchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductSubCategoryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HighlightController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FeedbackVisitorController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::prefix('home')->group(function () {

    Route::get('/product', [HomeController::class, 'productIndex']);
    Route::get('/product/{product:slug}', [HomeController::class, 'productShow']);
    Route::get('/product/category/{productCategory:slug}', [HomeController::class, 'productCategory']);
    Route::get('/product/sub-category/{productSubCategory:slug}', [HomeController::class, 'productSubCategory']);
    Route::get('/product/download/{id}', [HomeController::class, 'productDownload']);

    Route::get('/gallery', [HomeController::class, 'galleryIndex']);
    Route::get('/gallery/{project:slug}', [HomeController::class, 'galleryShow']);
    Route::get('/gallery/category/{projectCategory:slug}', [HomeController::class, 'galleryCategory']);

    //ary
    Route::resource('/feedback', FeedbackVisitorController::class);
    Route::get('/contact', [PageController::class, 'contactIndex']);
    Route::get('/about', [PageController::class, 'aboutIndex']);

    Route::get('/blog', [PageController::class, 'blogIndex']);
    Route::get('/blog/{post:slug}', [PageController::class, 'blogDetail']);
    Route::get('/blog-category/{postCategory:slug}', [PageController::class, 'blogCategory']);
    Route::get('/blog-archive/{month}/{year}', [PageController::class, 'blogArchieve']);

    Route::get('/FAQs', [PageController::class, 'faqIndex']);

    Route::get('/search', [PageController::class, 'searchBlog']);
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/product', ProductController::class);
    Route::resource('/product-category', ProductCategoryController::class);
    Route::resource('/product-sub-category', ProductSubCategoryController::class);
    Route::get('/product-files/create/{product}', [ProductController::class, 'createFile']);

    Route::post('/product-image', [ProductController::class, 'saveImage']);
    Route::delete('/product-image/{id}', [ProductController::class, 'deleteImage']);

    Route::post('/product-document', [ProductController::class, 'saveDocument']);
    Route::delete('/product-document/{id}', [ProductController::class, 'deleteDocument']);
    Route::get('/product-document/download/{id}', [ProductController::class, 'downloadDocument']);

    Route::resource('/project', ProjectController::class);
    Route::resource('/project-category', ProjectCategoryController::class);

    Route::get('/project-image/create/{project}', [ProjectController::class, 'createImage']);
    Route::post('/project-image', [ProjectController::class, 'saveImage']);
    Route::delete('/project-image/{id}', [ProjectController::class, 'deleteImage']);

    Route::resource('/post', PostController::class);
    Route::resource('/post-category', PostCategoryController::class);
    Route::get('/post-image/create/{post}', [PostController::class, 'createImage']);
    Route::post('/post-image', [PostController::class, 'saveImage']);
    Route::delete('/post-image/{id}', [PostController::class, 'deleteImage']);

    //ary sitepu
    Route::resource('/profile', ProfileController::class);
    Route::resource('/faq', FaqController::class);

    //highlight slider
    Route::get('/highlight', [HighlightController::class, 'index']);
    Route::get('/hightlight-slider/{id}/edit', [HighlightController::class, 'editSlider']);
    Route::post('/hightlight-slider', [HighlightController::class, 'saveSlider']);
    Route::post('/hightlight-slider/{id}', [HighlightController::class, 'updateSlider']);
    Route::delete('/hightlight-slider/{id}', [HighlightController::class, 'deleteSlider']);

    //highlight banner
    Route::get('/banner', [HighlightController::class, 'banner']);
    Route::get('/hightlight-banner/{id}/edit', [HighlightController::class, 'editBanner']);
    Route::post('/hightlight-banner', [HighlightController::class, 'saveBanner']);
    Route::post('/hightlight-banner/{id}', [HighlightController::class, 'updateBanner']);
    Route::delete('/hightlight-banner/{id}', [HighlightController::class, 'deleteBanner']);

    //feedback admin
    Route::get('/feedback', [Feedbackcontroller::class, 'index']);
    Route::delete('/feedback-delete/{id}', [FeedbackController::class, 'deleteFeedback']);
    Route::get('/feedback/{id}/detail', [FeedbackController::class, 'detailFeedback']);
    Route::get('/feedback-status/{id}', [FeedbackController::class, 'saveStatus']);

    Route::resource('/branch', BranchController::class);
});



Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
