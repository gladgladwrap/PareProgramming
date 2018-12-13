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



//Workflow page to provide guidelines all in one place

Route::get('/workflow', function() { return view('workflow.index'); });

Route::get('/workflows/video-game-design', function() { return view('workflow.video-game-design'); });

Route::get('/workflows/java-development', function() { return view('workflow.java-development'); });

Route::get('/workflows/systems-design', function() { return view('workflow.systems-design'); });

Route::get('/workflows/scrum', function() { return view('workflow.scrum'); });




Route::get('/service-requests', 'ServiceRequestController@index')->middleware('verified');


Route::post('/service-requests', 'ServiceRequestController@store');


//restrict regular users to only be able to see their own requests.
// if servicerequest->belongsTo->auth('user') then return that service request
// show service request to owner of the request and to admin. 

Route::get('/service-requests/{servicerequest}', 'ServiceRequestController@show');

Route::get('/service-requests/{servicerequest}/edit', 'ServiceRequestController@edit');

Route::patch('/service-requests/{servicerequest}', 'ServiceRequestController@update');

Route::delete('/service-requests/{servicerequest}', 'ServiceRequestController@destroy');


//Admin can view requests by user
//User can already see their requests in /service-requests
Route::get('/service-requests/users/{user}', 'ServiceRequestController@filterByUser');


//View requests for a specific service. 
//Admin can see all requests
///User can only see their requests
Route::get('/service-requests/services/{service}', 'ServiceRequestController@services');




Route::get('/sitemap', function(){

	return view('sitemap');
});

Auth::routes(['verify' => true]);

