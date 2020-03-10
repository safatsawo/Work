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

Route::get('/', 'SiteController@index');
Route::get('/about', 'SiteController@about'); 
Route::get('/frames', 'SiteController@frames'); 
Route::get('/services', 'SiteController@services'); 
Route::get('/contact', 'SiteController@contact'); 
Route::get('/appointment', 'SiteController@appointment');


Route::POST('/form/create', 'FormController@create');
Route::POST('/formaction', 'FormController@storeForm'); 
Route::POST('/appoint/create', 'AppointmentController@create');
Route::POST('/appointaction', 'AppointmentController@storeAppoint'); 

Route::POST('/consult/create', 'consultationController@create');
Route::POST('/consultaction', 'consultationController@storeConsult'); 

Route::POST('/contact/create', 'ContactController@create');
Route::POST('/contactaction', 'ContactController@storeContact'); 
