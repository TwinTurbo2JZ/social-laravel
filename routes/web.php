<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LogoutController;

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

Route::get('/register', [RegisterController::class , 'index']) ->name('register');
Route::post('/register', [RegisterController::class , 'store']);

Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard');


Route::get('/login', [LoginController::class , 'index']) ->name('login');
Route::post('/login', [LoginController::class , 'login']);

Route::post('/logout', [LogoutController::class , 'logout']);

Route::get('/', function () {
    return view('home');
});

Route::get('/post', function () {
    return view('posts.post');
});
