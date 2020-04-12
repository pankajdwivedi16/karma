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


# Auth::routes();

Route::group(['namespace' => 'Front'], function () {
	
	

	Route::middleware([ 'guest' ])->group(function () {

		Route::resource('signup', 'SignUpController');
		Route::resource('advocate-signup', 'SignUpController');
		Route::resource('signin', 'SignInController');
		
		Route::resource('contactus', 'ContactUsController');
			
		
		Route::get('{main}/{slug}', 'StaticPages@index');
		Route::get('/', function () { return view('frontend.home.index'); });

	});

	Route::middleware([ 'oauth' ])->group(function () {

		Route::get('logout','SignInController@logout');
		Route::get('dashboard', 'DashboardController@index');
		Route::get('profile', 'DashboardController@profile');

	});

});
