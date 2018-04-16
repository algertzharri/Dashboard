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

/* Home */
Route::get('/', function () {
    return view('kreu');
});

/* Faqet e tjera */
Route::get('about', function () {
	return view('about');
});
Route::get('blog', function () {
	return view('blog');
});
Route::get('blog-single', function () {
	return view('blog-single');
});
Route::get('agents', function () {
	return view('agents');
});
Route::get('life-insurance-quote', function () {
	return view('life-insurance-quote');
});
Route::get('car-insurance-quote', function () {
	return view('car-insurance-quote');
});
Route::get('house-insurance-quote', function () {
	return view('house-insurance-quote');
});
Route::get('house-insurance-quote', function () {
	return view('house-insurance-quote');
});
Route::get('travel-insurance-quote', function () {
	return view('travel-insurance-quote');
});
Route::get('claims', function () {
	return view('claims');
});
Route::get('contact', function () {
	return view('contact');
});
Route::get('not-found', function () {
	return view('not-found');
});
Route::get('car-insurance', function () {
	return view('car-insurance');
});
Route::get('house-insurance', function () {
	return view('house-insurance');
});
Route::get('life-insurance', function () {
	return view('life-insurance');
});
Route::get('travel-insurance', function () {
	return view('travel-insurance');
});


/* Dashboad */
Route::get('dashboard', function () {
	return view('dashboard.index');
});
Route::get('dashboard/test', function () {
	return view('dashboard.test');
});
Route::get('dashboard/contact','Controller@getDataKontaktet');
Route::get('dashboard/housequote','Controller@getDataHouseQuote');
Route::get('dashboard/carquote','Controller@getDataCarQuote');
Route::get('dashboard/lifequote','Controller@getDataLifeQuote');
Route::get('dashboard/travelquote','Controller@getDataTravelQuote');

/* Format */
Route::get('sukses', function () {
	return view('sukses');
});

Route::post('/travelquote','Controller@travelquote');
Route::post('/carquote','Controller@carquote');
Route::post('/lifequote','Controller@lifequote');
Route::post('/housequote','Controller@housequote');
Route::post('/contact','Controller@contact');


/* Login */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');