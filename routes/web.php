<?php

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


Route::get('/', [App\Http\Controllers\user\MainController::class, 'index'])->name('home');

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('admin/dashboard', [App\Http\Controllers\admin\AdminController::class, 'index'])->name('dashboard');

});