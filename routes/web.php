<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\ItemmallController;
use App\Http\Controllers\Auth\TEventItemController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\LoginController;
use App\Http\Controllers\Guest\RegisterController;
use Illuminate\Http\Request;

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

Route::get('/donate', function () {
    return view('donate.index');
})->name('donate');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return redirect('/index');
    });

    Route::get('/index', [HomeController::class, 'index'])->name('home');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login-post');
    Route::get('/logout', function () {
        return redirect()->route('login');
    });

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register-post');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/itemmall', [ItemmallController::class, 'index'])->name('itemmall');
    Route::post('/itemmall', [ItemmallController::class, 'store'])->name('itemmall-post');

    Route::get('/send-item', [TEventItemController::class, 'index'])->name('send-item');
    Route::post('/send-item', [TEventItemController::class, 'store'])->name('send-item-post');
});
