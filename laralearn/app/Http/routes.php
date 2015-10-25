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

	/*
		Small note:we can use magic methods in our where clauses
			$users = DB::table('users')->where('occupation','Engineer')->first();
			$users = DB::table('users')->whereOccupation('Engineer')->first();

	*/
	//Select * from users where id=3
	$users = DB::table('users')->where('id','>',1)->get();//this will first execute get() then return first element
	dd($users);

	//Select * from users where id=3
	$users = DB::table('users')->where('id',3)->get();
	dd($users);
	//Select * from users;
	$users = DB::table('users')->get();
	dd($users);
});
