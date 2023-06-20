<?php

use App\Http\Controllers\Layout;
use App\Http\Controllers\Presensicontroller;
use App\Http\Controllers\SessionController;
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
    return view('/sesi/index');
});


Route::resource('presensi',Presensicontroller::class)->middleware('isLogin');
Route::get('presensi',[Presensicontroller::class,'index'])->middleware('isLogin');
Route::get('presensi/{id}',[Presensicontroller::class,'detail']);
Route::get('/cetak_pdf', [Presensicontroller::class, 'cetak_pdf'])->name('cetak_pdf');

Route::get('/sesi',[SessionController::class, 'index'])->middleware('isTamu');
Route::post('/sesi/login',[SessionController::class, 'login'])->middleware('isTamu');
Route::get('/sesi/logout',[SessionController::class, 'logout']);
Route::get('/sesi/register',[SessionController::class, 'register'])->middleware('isTamu');
Route::post('/sesi/create',[SessionController::class, 'create'])->middleware('isTamu');

Route::controller(Layout::class)->group(function(){
    Route::get('/layout/home', 'home')->middleware('isLogin');
    Route::get('/layout/index', 'index')->middleware('isLogin');
});

