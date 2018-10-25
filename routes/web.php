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



Route::get('/service-requests', 'ServiceRequestController@index')->middleware('verified');


Route::post('/service-requests', 'ServiceRequestController@store');


Route::get('/service-requests/{servicerequest}', 'ServiceRequestController@show');



// Routes to be made

//This is only to be used by an administator
//A regular user should only be able to see their own service requests
Route::get('/service-requests/users/{user}', 'ServiceRequestController@filterByUser');


//This is also only to be used by an admin
// A regular user will only be able to see their specific requests, categorized by service

Route::get('/service-requests/services/{service}', 'ServiceRequestController@services');






// This is already complete
Auth::routes(['verify' => true]);

