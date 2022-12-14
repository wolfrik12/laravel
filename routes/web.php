<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SortController;
use App\Http\Controllers\cartController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/o_nas',[SliderController::class,'getData']);
Route::get('/where',[PageController::class,'where']);
Auth::routes();
Route::get('/films',[PageController::class,'films'])->name('films');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);
Route::get('/films/sort/{sort}',[SortController::class,'sortByPrice']);
Route::get('/films/sort/',function () {
    return redirect('/films');
});
Route::get('/films/{id}',[PageController::class,'filmsPage']);
Route::get('admin',[PageController::class,'admin']);

// Shop cart
Route::get('/cart',[PageController::class,'showCart'])->name('cart.list');
Route::post('/cart',[cartController::class,'add'])->name('cart.add');
Route::post('update-cart',[cartController::class,'update'])->name('cart.update');
Route::post('remove',[cartController::class,'remove'])->name('cart.remove');
Route::post('clear',[cartController::class,'clear'])->name('cart.clear');
Route::post('purchase',[cartController::class,'purchase'])->name('cart.purchase');