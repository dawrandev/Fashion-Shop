<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home_page')->name('home_page');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/products_page', 'products_page')->name('products_page');
    Route::get('/single_product/{product_id}', 'single_product')->name('single_product');
});
Route::controller(CategoryController::class)->group(function () {
    Route::get('/category_product/{category_name}', 'category_product')->name('category_product');
});
// Route::get('/counter', Counter::class);
Route::controller(BasketController::class)->group(function () {
    Route::get('/basket/{product_id}', 'basket')->name('basket');
    Route::get('/basket_page', 'basket_page')->name('basket_page');
    Route::get('/delete_basket/{id}', 'delete_basket')->name('delete_basket');
});
Route::controller(AboutController::class)->group(function () {
    Route::get('/about_page','about_page')->name('about_page');
});

