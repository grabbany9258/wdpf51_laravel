<?php

use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\showAge;
use App\Http\Middleware\AuthLogin;
use App\Http\Middleware\CheckAge;
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

// Route::get('/admin', function () {
//     return view('auth/login');
// });

// Route::get('/', [ProductController::class, 'index']);
Route::get('/', [DashboardController::class, 'index'])->name('home');
//Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::resource('products', ProductController::class);

// Creating a middleware for showAge
Route::middleware([CheckAge::class])->group(function () {
    Route::get('viewage', [showAge::class, 'index']);
});

// For Login Auth
//Route::get('/admin', [LoginController::class, 'index']);


// Route::middleware([AuthLogin::class])->group(function () {
//     Route::post('/login', [LoginController::class, 'login']);
// });

// Foe using css & script

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/about', function () {
    return view('about');
});


// for report
Route::get('/reports', [ReportController::class, 'report1']);
