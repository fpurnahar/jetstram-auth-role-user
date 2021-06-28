<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginResponse;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\SuperAdmin\SuperAdminController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('login-response', [LoginResponse::class, 'loginResponse']);

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::middleware(['super-admin'])->group(function () {
        Route::get('super-admin', [SuperAdminController::class, 'index'])->name('super.admin');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin');
    });
});
