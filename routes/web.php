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
Route::get('category/{id}','HomeController@categoryBlog');


// Admin Section
Route::get('admin/login','Admin\LoginController@login');
Route::post('admin/login','Admin\LoginController@authentication');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware'=>'admin'],function(){
	Route::get('logout',function(){
		\Auth::logout();
          return redirect('admin/login');
	});


Route::resource('blog','BlogController');
Route::group(['prefix' => 'blog'],function(){
		Route::post('/status', 'BlogController@changeStatus');
	});
	
Route::resource('category','CategoryController');
Route::group(['prefix' => 'category'],function(){
		Route::post('/status', 'CategoryController@changeStatus');
	});

Route::resource('contact','ContactController');
Route::group(['prefix' => 'contact'],function(){
		Route::post('/status', 'ContactController@changeStatus');
	});

Route::resource('social','SocialController');
Route::group(['prefix' => 'social'],function(){
		Route::post('/status', 'SocialController@changeStatus');
	});
});