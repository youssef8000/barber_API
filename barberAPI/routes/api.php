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

//public route
Route::get('/admin','AdminController@index');
Route::get('/admin/{id}','AdminController@show');


Route::get('/category','CategoryController@index');
Route::get('/category/{id}','CategoryController@show');

Route::get('/barber','BarbersController@index');
Route::get('/barber/{id}','BarbersController@show');


Route::get('/post','PostController@index');
Route::get('/post/{id}','PostController@show');
Route::post('/post','PostController@store');
Route::put('/post/{id}','PostController@update');
Route::delete('/post/{id}','PostController@destroy');

Route::get('/barberUser','BarberUserController@index');
Route::get('/barberUser/{id}','BarberUserController@show');


Route::get('/payment','PaymentController@index');
Route::get('/payment/{id}','PaymentController@show');

//public Auth route
Route::post('register',"AuthController@register");
Route::post('login',"AuthController@login");

//private route
Route::group(['middleware'=>["auth:sanctum"]],function(){

    Route::post('/admin','AdminController@store');
    Route::put('/admin/{id}','AdminController@update');
    Route::delete('/admin/{id}','AdminController@destroy');

    Route::post('/category','CategoryController@store');
    Route::put('/category/{id}','CategoryController@update');
    Route::delete('/category/{id}','CategoryController@destroy');

    Route::post('/barber','BarbersController@store');
    Route::put('/barber/{id}','BarbersController@update');
    Route::delete('/barber/{id}','BarbersController@destroy');

    Route::post('/barberUser','BarberUserController@store');
    Route::put('/barberUser/{id}','BarberUserController@update');
    Route::delete('/barberUser/{id}','BarberUserController@destroy');

    Route::post('/payment','PaymentController@store');
    Route::put('/payment/{id}','PaymentController@update');
    Route::delete('/payment/{id}','PaymentController@destroy');
    
// private Auth route
    Route::post('logout',"AuthController@logOut");

});