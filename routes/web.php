<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\komponent;
use App\Http\Controllers\navbar;
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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/table',[komponent::class, 'index']);
Route::get('/create',[komponent::class, 'create']);
Route::post('/store',[komponent::class, 'store']);
Route::get('/show/{id}',[komponent::class, 'show']);
Route::post('/update/{id}',[komponent::class, 'update']);
Route::get('/destroy/{id}',[komponent::class, 'destroy']);
Route::get('/komponenTBL',[navbar::class, 'komponenTBL']);
Route::get('/',[navbar::class, 'Utama']);
Route::get('/code',[navbar::class, 'code']);

