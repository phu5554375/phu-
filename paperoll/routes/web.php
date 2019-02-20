
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




    Route::get('/','HomeController@index')->name('home');
    Route::get('/home','HomeController@index');
    Route::get('/editor','HomeController@editor');
    Route::get('/contact','HomeController@contact');
    Route::get('/fqa','HomeController@fqa');
    Route::get('/terms','HomeController@terms');
  

	Route::get('images-upload', 'HomeController@imagesUpload');
	Route::post('images-upload', 'HomeController@imagesUploadPost')->name('images.upload');

   

	Route::get('/redirect/{social}', 'SocialAuthController@redirect');
	Route::get('/callback/{social}', 'SocialAuthController@callback');
