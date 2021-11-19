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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shawarma', [App\Http\Controllers\ShawarmaController::class, 'index'])->name('shawarma.index');
Route::get('/shawarma/create', [App\Http\Controllers\ShawarmaController::class, 'create'])->name('shawarma.create');
Route::post('/shawarma/store', [App\Http\Controllers\ShawarmaController::class, 'store'])->name('shawarma.store');
