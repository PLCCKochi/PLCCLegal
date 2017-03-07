<?php

/*
|--------------------------------------------------------------------------
| Front End Routes
|--------------------------------------------------------------------------
|
| Here is where you can register frontend routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/'					, 'Render\Index@index');
Route::get('/advocates'			, 'Render\Advocate@index');
Route::get('/advocates/{advID}'	, 'Render\Advocate@detail');
Route::get('/services'			, 'Render\Service@index');
Route::get('/services/{servID}'	, 'Render\Service@detail');
Route::get('/clients'			, 'Render\Client@index');
Route::get('/testimonials'		, 'Render\Client@testimonial');
Route::get('/blog'				, 'Render\Post@index');
Route::get('/blog/{postID}'		, 'Render\Post@detail');
Route::get('/consult'			, 'Render\Misc@consult');
Route::get('/contact'			, 'Render\Misc@contact');
Route::get('/404'				, 'Render\Misc@error');

//Public API
Route::get('/sms'				, 'API\SMSAPI@user');
Route::get('/smsrep'			, 'API\SMSAPI@reps');
Route::get('/smsstatus'			, 'API\SMSAPI@stat');