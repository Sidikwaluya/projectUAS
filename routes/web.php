<?php

use App\Http\Controllers\Presensicontroller;
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


Route::resource('presensi',Presensicontroller::class);
Route::get('presensi',[Presensicontroller::class,'index']);
Route::get('presensi/{id}',[Presensicontroller::class,'detail']);
