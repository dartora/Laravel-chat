<?php

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

Route::get(uri:'/', action:'app/Http/Controllers/PusherController@index');
Route::post(uri:'/broadcast', action:'app/Http/Controllers/PusherController@broadcast');
Route::post(uri:'/receive', action:'app/Http/Controllers/PusherController@receive');


