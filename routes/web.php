<?php

use App\Http\Controllers\Admin\SocialloginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\HomeController;
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
Route::get('/category-product/{id}', [HomeController::class, 'categoryProduct'])->name('category.product');
Route::get('/product-detail/{id}', [HomeController::class, 'productdetail'])->name('product.detail');
Route::get('/product-category/{id}', [HomeController::class, 'productcategory'])->name('product.category');
Route::post('/cart-remove', [CartController::class, 'cartremove'])->name('cart.remove');

Route::resource('/cart', CartController::class);
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/user/dashboard', [DashboardController::class, 'user'])->name('user.dashboard');
});

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/login', [LoginController::class,'index'])->name('user.login');
Route::get('/register', [LoginController::class,'register'])->name('user.register');

Route::get('/google/redirect', [SocialloginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/auth/google/callback', [SocialloginController::class, 'handleGoogleCallback'])->name('google.callback');