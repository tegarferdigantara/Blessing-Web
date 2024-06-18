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

    Route::get('/send-item-online', [TEventItemController::class, 'onlineIndex'])->name('send-item-online');
    Route::post('/send-item-online', [TEventItemController::class, 'onlineStore'])->name('send-item-online-post');

    Route::get('/send-item-on-off', [TEventItemController::class, 'onlineOfflineIndex'])->name('send-item-on-off');
    Route::post('/send-item-on-off', [TEventItemController::class, 'onlineOfflineStore'])->name('send-item-on-off-post');

    Route::get('/send-item-offline', [TEventItemController::class, 'offlineIndex'])->name('send-item-offline');
    Route::post('/send-item-offline', [TEventItemController::class, 'offlineStore'])->name('send-item-offline-post');

    Route::get('/send-item-by-id', [TEventItemController::class, 'byIdIndex'])->name('send-item-by-id');
    Route::post('/send-item-by-id', [TEventItemController::class, 'byIdStore'])->name('send-item-by-id-post');

    Route::get('/send-rps', [TEventItemController::class, 'rpsIndex'])->name('send-rps');
    Route::post('/send-rps', [TEventItemController::class, 'rpsStore'])->name('send-rps-post');
});
