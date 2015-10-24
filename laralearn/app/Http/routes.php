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

Route::get('/profile/{anything?}',function($anything = ''){
	return view('welcome')->with('info',$anything);
});

Route::get('/', function () {

	$animal = 'lion';
	$animal1 = 'zebra';
	$city = 'Jaipur';
	$list = array($animal,$animal1,$city);
	/*Sending a linst of variable*/
	return view('welcome')->with('list',$list);

	/*Magic methods*/
	return view('welcome')->withInfo($city);


	/*Two ways to pass multiple variable*/
	
	/*2/2*/
	return view('welcome',array('info'=>$animal1,'info1'=> $city));
	

	/*1/2*/
	return view('welcome')->with('info',$animal)->with('info1',$city);


	/*Two ways to pass an vairable*/
	/*2/2*/
	return view('welcome',array('info'=>$animal1));

	/*1/2*/
    return view('welcome')->with('info',$city);
});

