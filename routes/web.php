<?php

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

Route::get('/', 'HomeController@index');
Route::get('/cars', 'HomeController@car');
Route::get('/pendanaan', 'HomeController@calculator');
Route::post('/calculate', 'HomeController@calculate');
//ContactControler adalah nama controler, sedangkan index adalah methodnya
Route::get('/contacts/create', 'ContactController@create');
Route::post('/contacts', 'ContactController@store');
Route::get('/contacts/{id}/edit','ContactController@edit');
Route::patch('/contacts/{id}','ContactController@update');
Route::delete('/contacts/{id}','ContactController@destroy');
