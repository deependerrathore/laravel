<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return 'You have arried';
});

Route::get('/milk',function(){
	return 'this is the milk';
});
Route::get('/milk/{flavor}',function($flavor){
	return $flavor .' milk is nice';
});