<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KesehatanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PerlindunganController;

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
    return view('home');
});
Route::resource('/kesehatan', KesehatanController::class);
Route::resource('/pendidikan', PendidikanController::class);
Route::resource('/perlindungan', PerlindunganController::class);
