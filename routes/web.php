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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/create', function(){
// 	return view('create');
// });
Route::get('/','CreatesController@home');
Route::get('/create','CreatesController@create');
Route::post('/insert','CreatesController@add');
Route::get('/update/{id}','CreatesController@update');
Route::post('/edit/{id}','CreatesController@edit');
Route::get('/read/{id}','CreatesController@read');
Route::get('/delete/{id}','CreatesController@delete');
Route::post('/search','CreatesController@search');
Route::get('/profile','CreatesController@profile');

Route::post('upload','UploadController@upload');

