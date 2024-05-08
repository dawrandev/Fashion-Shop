<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use App\Http\Middleware\LogUserIp;
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
    Route::get('/create_product_page', 'create_product_page')->name('create_product_page');
});
Route::controller(CategoryController::class)->group(function () {
    Route::get('/category_product/{category_name}', 'category_product')->name('category_product');
    Route::post('/create_category', 'create_category')->name('create_category');
    Route::post('/edit_category', 'edit_category')->name('edit_category');
    Route::get('/delete_category/{category_id}', 'delete_category')->name('delete_category');
});
Route::controller(BasketController::class)->group(function () {
    Route::get('/basket/{product_id}/{count}/{size_id}/{color_id}/{pcs}', 'basket')->name('basket');
    Route::get('/basket_page', 'basket_page')->name('basket_page');
    Route::get('/delete_basket/{id}', 'delete_basket')->name('delete_basket');
});
Route::controller(AboutController::class)->group(function () {
    Route::get('/about_page', 'about_page')->name('about_page');
});
Route::controller(SizeController::class)->group(function () {
    Route::post('/create_size', 'create_size')->name('create_size');
    Route::get('/delete_size/{size_id}', 'delete_size')->name('delete_size');
    Route::post('/edit_size', 'edit_size')->name('edit_size');
});
Route::controller(ColorController::class)->group(function () {
    Route::post('/create_color', 'create_color')->name('create_color');
    Route::post('/edit_color', 'edit_color')->name('edit_color');
    Route::get('/delete_color/{color_id}', 'delete_color')->name('delete_color');
});
Route::controller(ClientController::class)->group(function () {
    Route::post('/registration', 'registration')->name('registration');
    Route::get('/registration_page', 'registration_page')->name('registration_page');
    Route::get('/profile', 'profile')->name('profile');
    Route::post('/update_client', 'update_client')->name('update_client');
    Route::get('/my_purchases_page', 'my_purchases_page')->name('my_purchases_page');
});
Route::controller(CardController::class)->group(function () {
    Route::get('/card_page/{product_id}', 'card_page')->name('card_page');
});
Route::get('/price', [Counter::class, 'price'])->name('price');


// AdminRoutes

Route::controller(AuthController::class)->group(function () {
    Route::get('/login_page', 'login_page')->name('login_page');
    Route::get('register_page', 'register_page')->name('register_page');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/table', 'table')->name('table');
});

Route::controller(OptionController::class)->group(function () {
    Route::get('/create_option_page', 'create_option_page')->name('create_option_page');
    Route::get('/single_category/{category_id}', 'single_category')->name('single_category');
    Route::get('/single_size/{size_id}', 'single_size')->name('single_size');
    Route::get('/single_color/{color_id}', 'single_color')->name('single_color');
});

Route::middleware([LogUserIp::class])->group(function () {
    return view('client.home');
});


