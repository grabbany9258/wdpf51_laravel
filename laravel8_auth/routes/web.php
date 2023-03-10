<?php

use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\HomeController;
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


// Frontend Routes

// Route::get('/', function () {
//     return view('frontend.home');
// });
Route::get('/', [HomeController::class, 'index']);

// For Login

// Route::get('/admin', [LoginController::class, 'login']);



// Backend Routes

Route::prefix('admin')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // For user 
    Route::resource('/users', UserController::class);
});
