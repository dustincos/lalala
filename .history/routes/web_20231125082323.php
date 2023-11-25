<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\frontend\IndexController;
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
Route::controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('login','login')->name('login');
    Route::get('dashboard','dashboard')->middleware('auth')->name('dashboard');
    Route::get('settings','admin')->middleware('auth')->name('admin');
    Route::get('register','register')->name('register');
    Route::get('logout','logout')->name('logout');
});

Route::controller(UserController::class)->group(function() {
    Route::post('login','logins');
    Route::post('register','registers');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('list', 'index')->name('products.index');
    Route::get('add', 'create')->middleware('auth')->name('products.add');
    Route::post('products/store', 'store')->name('products.store');
    Route::get('products/{id}/edit', 'edit')->name('products.edit');
    Route::put('products/{id}/update', 'update')->name('products.update');
    Route::delete('products/{id}/delete', 'destroy')->name('products.delete');
    Route::get('products/{id}/show', 'show')->name('products.preview');
});

Route::get('/',[HomeController::class,'index']);
