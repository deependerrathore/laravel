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
	//UPDATING/DELETING: ALWAYS SPECIFY THE WHERE CLAUSE

	DB::table('users')->whereName('mudit')->delete();
	return 'DELETED';
	//DB::table('users')->where('id',4)->update(array('occupation'=>'Cook'));
	DB::table('users')->whereId(4)->update(array('occupation'=>'Teacher'));
	return 'updated';

	//INSERTING
	/*
		We can use insertGetId (insted of insert) to grap the id of the inserted users
		DB::table('users')->insertGetId(array('name'=>'mudit','occupation'=>'Engineer'));
	*/

	DB::table('users')->insert(array('name'=>'mudit','occupation'=>'Engineer'));
	if('insert successfull');
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
