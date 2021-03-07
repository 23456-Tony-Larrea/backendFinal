<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("test","TestController@index");
Route::post("testPost","TestController@store");

Route::get("usuario","UserController@index");
Route::post("usersPost","UserController@store");
Route::patch("usersPath/{id}","UserController@update");
Route::delete("usersDelete/{id}","UserController@destroy");
