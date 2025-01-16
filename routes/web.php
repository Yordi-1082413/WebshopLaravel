<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CartController;
use App\Http\Middleware\CheckAdmin;


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

Route::get('/', [WelcomeController::class, 'index'] )->name('index');


Route::get('addcategorie',  [CategorieController::class, 'create'])->name('addcategorie')->middleware('checkAdmin');

Route::post('storeCategorie', [CategorieController::class, 'store'])->name('storeCategorie')->middleware('checkAdmin');

Route::get('addproduct',  [ProductController::class, 'create'])->name('addproduct')->middleware('checkAdmin');

Route::post('storeProduct', [ProductController::class, 'store'])->name('storeProduct')->middleware('checkAdmin');


Route::get('products', [ProductController::class, 'show'])->name('products');

Route::get('product/{id}', [ProductController::class, 'oneProduct'])->name('product');

Route::get('destroy/{id}', [ProductController::class, 'destroy'])->name('destroy')->middleware('checkAdmin');



 Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit')->middleware('checkAdmin');

 Route::post('update/{id}', [ProductController::class, 'update'])->name('upda')->middleware('checkAdmin');


 Route::get('contact', [WelcomeController::class, 'contactcon'])->name('contact');


Route::get('onecategorie/{id}', [CategorieController::class, 'onecategorie'])->name('onecategorie');


Route::get('search', [ProductController::class, 'search'])->name('search');

Route::post('addtocart/{user_id}/{product_id}',  [CartController::class, 'addtocart'])->name('addtocart');

Route::get('shoppingcart',  [CartController::class, 'shoppingcart'])->name('shoppingcart');

Route::get('destroycartitem/{id}', [CartController::class, 'destroycartitem'])->name('destroycartitem');

Route::post('updatecartquan/{id}',  [CartController::class, 'updatecartquan'])->name('updatecartquan');


Route::post('checkKorting',  [CartController::class, 'checkKorting'])->name('checkKorting');

Auth::routes();





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






