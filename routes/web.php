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

Route::get('/', 'PagesController@getHome');

Route::get('/about', 'PagesController@getAbout');

<<<<<<< HEAD
Route::get('/contact', 'PagesController@getContact');
=======

Route::get('/contact', 'ContactController@getContactForm')->name('contact.get');

Route::post('/contact', 'ContactController@postContactForm')->name('contact.post');


Route::get('/products-amu-coating', 'PagesController@getProductsAmu');

Route::get('/products-roof-coating', 'PagesController@getProductsRoof');

>>>>>>> 8c15b6531e3fdbef2fcb087cad70429faac3dd9f

Route::get('/', 'PagesController@getHome');
