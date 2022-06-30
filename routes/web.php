<?php


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/home/product', [HomeController::class, 'productIndex']);
Route::get('/home/product/{product:slug}', [HomeController::class, 'productShow']);

Route::get('/home/gallery', [HomeController::class, 'galleryIndex']);


//ary
Route::get('/home/contact', [PageController::class, 'contactIndex']);
Route::resource('/home/feedback', FeedbackVisitorController::class);
Route::get('/home/about', [PageController::class, 'aboutIndex']);

Route::get('/home/blog/', [PageController::class, 'blogIndex']);
Route::get('/home/blog/{post:slug}', [PageController::class, 'blogDetail']);
Route::get('/home/blog-category/{postCategory:slug}', [PageController::class, 'blogCategory']);

Route::get('/home/FAQs', [PageController::class, 'faqIndex']);

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
});



Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
