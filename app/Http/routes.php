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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/auth-social/", function(){
	return view("layouts.authsocial");
});
Route::get("/sign-in/{social}", "SocialController@getSocialLogin");
Route::get("/sign-in/{social}/callback", "SocialController@getSocialAuthCallback");


Route::get("/mail/","ForumController@mail");
Route::get("/mailhtml/",function(){
	return view("mail");
});


Route::group(["middleware"=>["auth-social"]], function(){
	Route::get("/", "ForumController@index");

	Route::post("/put-comment/", "ForumController@putCommnet");

	Route::get("/signout/",function(){
		Session::flush();
		return redirect('/');
	});
});


