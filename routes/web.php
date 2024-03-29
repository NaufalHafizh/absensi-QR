<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\Dashboardcontroller;
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

Route::get('/', [AbsensiController::class, 'index'])->name('index');
Route::post('/store', [AbsensiController::class, 'store'])->name('store');

Route::get('/dash', [Dashboardcontroller::class ,  'index']);
