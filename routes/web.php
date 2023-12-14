<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AccountController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\DashboardController;
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

Route::get('/patch-azuraro/{file}', function ($file) {
    $filePath = public_path('patch-azuraro/' . $file);
    if (file_exists($filePath)) {
        return response()->file($filePath);
    } else {
        abort(404);
    }
})->where('file', '.*');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return redirect('/home');
    });

    Route::get('/home', [HomeController::class, 'index']);

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

    //Route::post('/dashboard/fix5101', [TDisconnect::class, 'fixdc']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/settings', [AccountController::class, 'index']);
    Route::post('/dashboard/settings', [AccountController::class, 'update']);

    Route::get('/itemmall', [ItemmallController::class, 'index'])->name('itemmall');
    Route::post('/itemmall', [ItemmallController::class, 'store']);

    Route::get('/freemall', [FreemallController::class, 'index'])->name('freemall');
    Route::post('/freemall', [FreemallController::class, 'store']);

    Route::get('/transaction', [TransactionsController::class, 'show'])->name('transaction');

    Route::get('/dashboard/admin', [AdminController::class, 'index']);
    Route::post('/dashboard/admin', [AdminController::class, 'isMaintenance']);
    Route::resource('/dashboard/admin/rps', PointsController::class)->except(['show', 'destroy', 'edit', 'update']);
    // Route::resource('/dashboard/admin/itemmall', TCategoryItemsController::class);
});
