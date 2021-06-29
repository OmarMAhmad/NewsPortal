<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontSiteController;
use App\Http\Controllers\Dashboard;

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
/* ---------------------- FrontSite Routes ---------------------- */
Route::get('/', [FrontSiteController::class, 'ShowHome']);
Route::get('about', [FrontSiteController::class, 'ShowAbout']);
Route::get('category/{category}', [FrontSiteController::class, 'ShowCategory']);
Route::get('details/{post}', [FrontSiteController::class, 'ShowDetails']);
Route::post('search', [FrontSiteController::class, 'ShowSearch']);
Route::get('contact', [FrontSiteController::class, 'ShowContact']);
Route::post('contact', [FrontSiteController::class, 'SendContact']);

/* ---------------------- Login To Admin Routes ---------------------- */
Route::get('login', [\App\Http\Controllers\AuthController::class, 'Login'])->name('login');
Route::post('auth', [\App\Http\Controllers\AuthController::class, 'Authentication']);
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'Logout']);

/* ---------------------- Admin Routes ---------------------- */
Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/', [Dashboard\DashboardController::class, 'ShowDashboard']);
    Route::resource('user', Dashboard\UserController::class);
    Route::resource('post', Dashboard\PostController::class);
    Route::resource('category', Dashboard\CategoryController::class);
    Route::resource('comment', Dashboard\CommentController::class);
});
