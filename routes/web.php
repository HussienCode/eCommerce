<?php

use App\Http\Controllers\admin\AdminProductsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::resource('/products', AdminProductsController::class);
});

Route::get('/{page}', 'App\Http\Controllers\AdminController@index');
