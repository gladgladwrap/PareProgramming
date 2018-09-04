<?php

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

Route::get('/', 'ServicesController@index');


Route::get('/services/{service}', 'ServicesController@show');



Route::get('/service-requests', 'ServiceRequestController@index');


Route::post('/service-requests', 'ServiceRequestController@store');


Route::get('/service-requests/{servicerequest}', 'ServiceRequestController@show');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
