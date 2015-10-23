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


Route::get('/milk/{flavor?}',function($flavor = null){
	if($flavor == null){
		return "All the flavours are nice";
	}
	return $flavor .' milk is nice';
});

Route::get('/articles/{title?}',function($title = null){
	if($title == null){
		return 'This is the list of all articles';
	}
	return 'We found article named ' . $title;
});

Route::get('/a/{test}/b/{title?}',function($test,$title = null){
	if($title == null){
		return 'This is the list of all articles';
	}
	return 'test = ' . $test . ' title = ' . $title;
});
