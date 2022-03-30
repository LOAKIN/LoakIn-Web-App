<?php

use App\Http\Controllers\User\loginusercontroller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\ProdukAdminController;

use App\Http\Controllers\User\HomeUserController;

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

Route::prefix('admin')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardAdminController::class, 'index'])->name('index');
    });
    Route::prefix('produk')->name('produk.')->group(function () {
        Route::get('/', [ProdukAdminController::class, 'index'])->name('index');
    });
});

Route::prefix('/')->group(function () {
    Route::prefix('/')->name('home.')->group(function () {
        Route::get('/', [HomeUserController::class, 'index'])->name('index');
    }); 
});

Route::get('loginuser', [loginusercontroller::class, 'loginuser'])->name('loginuser');
