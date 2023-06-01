<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes Admin
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::prefix('admin')->as('admin.')->middleware(['auth'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/home', HomeController::class);
    Route::resource('/about', AboutController::class);
    Route::resource('/service', ServiceController::class);
    Route::get('/portfolio/category/all', [CategoryController::class, 'fetchData'])->name('category.all');
    Route::resource('/portfolio/category', CategoryController::class);
    Route::resource('/portfolio', PortfolioController::class);
    Route::resource('/contact', ContactController::class);
    
});
