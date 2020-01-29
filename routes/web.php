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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/poster','FileController@index');

Route::get('/uploadfile','FileController@upload');
Route::post('/uploadfile','FileController@insert');

Route::get('/editimage/{id}','FileController@edit');

Route::put('/updateimage/{id}','FileController@update');

Route::get('/deleteimage/{id}','FileController@delete');

Route::get("show",'FileController@showall');
Route::get("show/{id}",'FileController@show');

Auth::routes();

//Route::get('/home','HomeController@index')->name('home');

Route::get('/profile','UserProfileController@myprofile');
Route::get('/update-profil','UserProfileController@myProfileUpdate');

Route::post('/update-profil','UserProfileController@updateProfile')->name('update-profil');Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	//Route::get('poster', function () {
	//	return view('pages.poster');
	//})->name('poster');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

