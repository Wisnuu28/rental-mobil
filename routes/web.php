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
//     return view('pages.dashboard');
// });
Route::get('/dashboard', 'DataMobilController@index');
Route::get('/tambahdata', 'DataMobilController@create');
Route::post('/tambahdata/store', 'DataMobilController@store');
Route::get('/edit/{id}', 'DataMobilController@edit');
Route::put('/edit/upload/{id}', 'DataMobilController@upload');