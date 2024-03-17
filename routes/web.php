<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AccountController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\DisconnectController;
use App\Http\Controllers\Auth\FreemallController;
use App\Http\Controllers\Auth\ItemmallController;
use App\Http\Controllers\Auth\PointsController;
use App\Http\Controllers\Auth\TransactionsController;
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

Route::get('/topup', function () {
    return view('topup.index');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return redirect('/index');
    });

    Route::get('/index', [HomeController::class, 'index']);

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/logout', function () {
        return redirect()->route('login');
    });

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [LoginController::class, 'logout']);

    Route::get('/fix5101', [DisconnectController::class, 'fixdc']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/itemmall', [ItemmallController::class, 'index'])->name('itemmall');
    Route::post('/itemmall', [ItemmallController::class, 'store']);

    Route::get('/freemall', [FreemallController::class, 'index'])->name('freemall');
    Route::post('/freemall', [FreemallController::class, 'store']);

    Route::get('/transaction', [TransactionsController::class, 'show'])->name('transaction');

    Route::get('/changepassword', [AccountController::class, 'index'])->name('changepassword');
    Route::post('/changepassword', [AccountController::class, 'update']);

    Route::get('/changenickname', function() {
        return view('dashboard.character.changenickname');
    });
    Route::get('/changegender', function() {
        return view('dashboard.character.changegender');
    });

    Route::get('/dashboard/admin', [AdminController::class, 'index']);
    Route::post('/dashboard/admin', [AdminController::class, 'isMaintenance']);
    Route::resource('/dashboard/admin/rps', PointsController::class)->except(['show', 'destroy', 'edit', 'update']);
});
