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

Route::get('/', 'HomeController@index');

Route::get('listing/{id}', 'ListingController@get');
Route::get('listings/search', 'ListingController@search');
Route::get('listings/handleFilter', 'ListingController@filter');
Route::get('listings/{category}', 'ListingController@category');

Route::get('listings/{category}/{manufacturer}', 'ListingController@categoryAndManufacturer');