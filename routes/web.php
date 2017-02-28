<?php

Use Thujohn\Twitter\Facades\Twitter;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/twitter', function()
{
	DB::table('tweets')->truncate();
    $tweets = Twitter::getUserTimeline(['screen_name' => 'i_athul', 'count' => 25, 'format' => 'object']);
    foreach ($tweets as $tweet) {
    	$priority = $tweet->retweet_count;
    	$priority *= 5;
    	$priority += $tweet->favorite_count;
    	DB::table('tweets')->insert([
    		'tweet'=>preg_replace( '/[^[:print:]]/', '',$tweet->text),
    		'priority'=>$priority,
    		'featured'=>0
    	]);
    }
    return DB::table('tweets')->get();
});

Route::get('/test'               , 'Render\Test@index');