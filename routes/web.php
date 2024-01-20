<?php

use App\Http\Controllers\HocsinhController;
use App\Http\Controllers\LophocController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::resource('hocsinh',HocsinhController::class);
Route::resource('lophoc',LophocController::class);
