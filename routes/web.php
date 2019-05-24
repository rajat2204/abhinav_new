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

// Front Section
Route::get('/','HomeController@index');
Route::get('/about','HomeController@aboutUs');
Route::get('/contact','HomeController@contactUs');
Route::get('/interviews','HomeController@interview');
Route::get('/blog','HomeController@blogs');
Route::get('blog/{slug}','HomeController@singleBlog');
Route::post('categoryblog','HomeController@categoryBlog');
Route::get('/press','HomeController@press');

// Admin Section
Route::get('admin/login','Admin\LoginController@login');
Route::post('admin/login','Admin\LoginController@authentication');
Route::get('admin/changepassword','Admin\LoginController@changePassword');
Route::post('admin/changepassword','Admin\LoginController@adminchangePass');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware'=>'admin'],function(){
	Route::get('logout',function(){
		\Auth::logout();
          return redirect('admin/login');
	});
// Blog Section 
Route::resource('blog','BlogController');
Route::group(['prefix' => 'blog'],function(){
		Route::post('/status', 'BlogController@changeStatus');
	});

// Category Section 
Route::resource('category','CategoryController');
Route::group(['prefix' => 'category'],function(){
		Route::post('/status', 'CategoryController@changeStatus');
	});

// Social Section
Route::resource('social','SocialController');
Route::group(['prefix' => 'social'],function(){
		Route::post('/status', 'SocialController@changeStatus');
	});

// Press Section
Route::resource('press','PressController');
Route::group(['prefix' => 'press'],function(){
		Route::post('/status', 'PressController@changeStatus');
	});
});