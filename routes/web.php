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


//restrict regular users to only be able to see their own requests.
// if servicerequest->belongsTo->auth('user') then return the details of the service request
// if the admin is viewing, then show the service request.

Route::get('/service-requests/{servicerequest}', 'ServiceRequestController@show');

//This is only to be used by an administator
//A regular user will only be able to see their own requests

Route::get('/service-requests/users/{user}', 'ServiceRequestController@filterByUser');


//This is also only to be used by an admin

Route::get('/service-requests/services/{service}', 'ServiceRequestController@services');



Route::get('/sitemap', function(){

	return view('sitemap');
});






// This is already complete
Auth::routes(['verify' => true]);

