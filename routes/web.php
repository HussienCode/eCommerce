<?php

use App\Http\Controllers\admin\AdminAvailableController;
use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminMadeController;
use App\Http\Controllers\admin\AdminMaterialController;
use App\Http\Controllers\admin\AdminProductsController;
use App\Http\Controllers\admin\AdminRateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\web\UserController;
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
    // Home Page Dashboard
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // lk_category
    Route::resource('/categories', AdminCategoryController::class);

    // lk_rate
    Route::resource('/rate', AdminRateController::class);

    // lk_available
    Route::resource('/available', AdminAvailableController::class);

    // lk_made
    Route::resource('/made', AdminMadeController::class);

    // lk_material
    Route::resource('/material', AdminMaterialController::class);

    //products
    Route::resource('/products', AdminProductsController::class);
});

// Route::middleware(['auth'])->group(function () {
//     Route::resource('/', UserController::class);
// });

Route::get('/{page}', 'App\Http\Controllers\AdminController@index');
