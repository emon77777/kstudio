<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AchievementController;
use App\Http\Controllers\Backend\AmenityController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ContactMailController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Backend\FocusController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\SettingController;

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
    Route::resource('/portfolio/category', CategoryController::class);
    Route::resource('/portfolio', PortfolioController::class);
    Route::resource('/contact', ContactController::class);
    Route::resource('/amenity', AmenityController::class);
    Route::resource('/achievement', AchievementController::class);
    Route::resource('/feedback', FeedbackController::class);
    Route::resource('/focus', FocusController::class);
    Route::resource('/setting', SettingController::class);
    Route::resource('/contact-mail', ContactMailController::class);
});
