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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware'=>'auth.jwt','prefix' => 'v1'], function () {
    Route::get('/sellers', 'SellersController@index');
    Route::post('/sellers', 'SellersController@store');
    Route::delete('/sellers/{id}', 'SellersController@destroy');
    Route::get('/sellers/{id}', 'SellersController@show');
    Route::get('/sellers/{id}', 'SellersController@update');
    Route::get('/products', 'APIProductController@listar');
    Route::get('/camisetas', 'APICamisetasController@index');
    Route::get('/camisetas/{id}', 'APICamisetasController@show');
    Route::post('/camisetas', 'APICamisetasController@store');
    Route::put('/camisetas/{id}', 'APICamisetasController@update');
    Route::delete('/camisetas/{id}', 'APICamisetasController@destroy');
    });
    Route::post('/login','APIController@login');
    Route::get('/login','APIController@logout');
