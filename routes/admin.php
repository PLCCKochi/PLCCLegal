<?php


/*
|--------------------------------------------------------------------------
| Admin Interface Routes
|--------------------------------------------------------------------------
|
| Here is where you can register front end routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
  // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('sms', 'Admin\SMSCrudController');
    CRUD::resource('post', 'Admin\PostCrudController');
    CRUD::resource('client', 'Admin\ClientCrudController');
    CRUD::resource('service', 'Admin\ServiceCrudController');
    CRUD::resource('advocate', 'Admin\AdvocateCrudController');
    CRUD::resource('testimonial', 'Admin\TestimonialCrudController');
});