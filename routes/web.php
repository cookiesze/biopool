<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LogosController;
use App\Http\Controllers\Admin\SlideshowController;
use App\Http\Controllers\Guest\CategoryNavController;
use App\Models\Logo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [HomeController::class, 'index']);


Route::get('/guest/nav', [App\Http\Controllers\Guest\CategoryNavControl::class, 'index']);

Route::get('/guest/post', [App\Http\Controllers\Guest\PostController::class, 'index'])->name('post');
Route::get('/guest/show-post/{slug}', [App\Http\Controllers\Guest\PostController::class, 'show'])->name('post_show');

Route::get('/guest/tags/{name}', [App\Http\Controllers\Guest\TagsController::class, 'index'])->name('tags');


Route::get('/guest/contact_us', [App\Http\Controllers\Guest\ContactUsController::class, 'index']);

Route::get('/guest/product', [App\Http\Controllers\Guest\ProductController::class, 'index'])->name('product');
Route::get('/guest/category/{slug}', [App\Http\Controllers\Guest\ProductController::class, 'category'])->name('category');
Route::get('/guest/product/{slug}', [App\Http\Controllers\Guest\ProductController::class, 'show'])->name('product_show');


Route::get('/guest/about_us/', [App\Http\Controllers\Guest\AboutUsController::class, 'index']);


Route::post('/guest/contact-form', [App\Http\Controllers\Guest\ContactUsController::class, 'storeContactForm'])->name('contact-form.store');









Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/dashboard', 'Admin\FrontendController@index');

    /*categories*/
    Route::get('/admin/categories', 'Admin\CategoryController@index');
    Route::get('/admin/create-category', 'Admin\CategoryController@create');
    Route::post('/admin/store-category', 'Admin\CategoryController@store');
    Route::get('/admin/edit-category/{id}', [CategoryController::class, 'edit']);
    Route::put('/admin/update-category/{id}', [CategoryController::class, 'update']);
    Route::get('/admin/delete-category/{id}', [CategoryController::class, 'destroy']);

    /*Product*/
    Route::get('/admin/products', [ProductController::class, 'index']);
    Route::get('/admin/create-products', [ProductController::class, 'create']);
    Route::post('/admin/store-products', [ProductController::class, 'store']);
    Route::get('/admin/edit-products/{id}', [ProductController::class, 'edit']);
    Route::put('/admin/update-products/{id}', [ProductController::class, 'update']);
    Route::get('/admin/delete-products/{id}', [ProductController::class, 'destroy']);

    /*Tags*/
    Route::get('/admin/tags', [TagsController::class, 'index']);
    Route::get('/admin/create-tags', [TagsController::class, 'create']);
    Route::post('/admin/store-tags', [TagsController::class, 'store']);
    Route::get('/admin/edit-tags/{id}', [TagsController::class, 'edit']);
    Route::put('/admin/update-tags/{id}', [TagsController::class, 'update']);
    Route::get('/admin/delete-tags/{id}', [TagsController::class, 'destroy']);

    /*Post*/
    Route::get('/admin/posts', [PostController::class, 'index']);
    Route::get('/admin/create-post', [PostController::class, 'create']);
    Route::post('/admin/store-post', [PostController::class, 'store']);
    Route::get('/admin/edit-post/{id}', [PostController::class, 'edit']);
    Route::put('/admin/update-post/{id}', [PostController::class, 'update']);
    Route::get('/admin/delete-post/{id}', [PostController::class, 'destroy']);

    Route::delete('/admin/delete_image/{id}',[PostController::class,'delete_image']);
    Route::delete('/admin/delete_image_product/{id}',[ProductController::class,'delete_image_product']);

    /*slideshow*/

    Route::get('/admin/slideshow', [SlideshowController::class, 'index']);
    Route::get('/admin/create-slideshow', [SlideshowController::class, 'create']);
    Route::post('/admin/store-slideshow', [SlideshowController::class, 'store']);
    Route::get('/admin/edit-slideshow/{id}', [SlideshowController::class, 'edit']);
    Route::put('/admin/update-slideshow/{id}', [SlideshowController::class, 'update']);
    Route::get('/admin/delete-slideshow/{id}', [SlideshowController::class, 'destroy']);

    /*contact_us*/
    Route::get('/admin/contact_us', [ContactController::class, 'index']);
    Route::get('/admin/create-contact', [ContactController::class, 'create']);
    Route::post('/admin/store-contact', [ContactController::class, 'store']);
    Route::get('/admin/edit-contact/{id}', [ContactController::class, 'edit']);
    Route::put('/admin/update-contact/{id}', [ContactController::class, 'update']);
    Route::get('/admin/delete-contact/{id}', [ContactController::class, 'destroy']);

    /*Videos*/
    Route::get('/admin/videos', [VideosController::class, 'index']);
    Route::get('/admin/create-video', [VideosController::class, 'create']);
    Route::post('/admin/store-video', [VideosController::class, 'store']);
    Route::get('/admin/edit-video/{id}', [VideosController::class, 'edit']);
    Route::put('/admin/update-video/{id}', [VideosController::class, 'update']);
    Route::get('/admin/delete-video/{id}', [VideosController::class, 'destroy']);

    /*Brands*/
    Route::get('/admin/brands', [BrandsController::class, 'index']);
    Route::get('/admin/create-brands', [BrandsController::class, 'create']);
    Route::post('/admin/store-brands', [BrandsController::class, 'store']);
    Route::get('/admin/edit-brands/{id}', [BrandsController::class, 'edit']);
    Route::put('/admin/update-brands/{id}', [BrandsController::class, 'update']);
    Route::get('/admin/delete-brands/{id}', [BrandsController::class, 'destroy']);

    /*logo*/
    Route::get('/admin/logo', [LogosController::class, 'index']);
    Route::get('/admin/create-logo', [LogosController::class, 'create']);
    Route::post('/admin/store-logo', [LogosController::class, 'store']);
    Route::get('/admin/edit-logo/{id}', [LogosController::class, 'edit']);
    Route::put('/admin/update-logo/{id}', [LogosController::class, 'update']);
    Route::get('/admin/delete-logo/{id}', [LogosController::class, 'destroy']);

});


