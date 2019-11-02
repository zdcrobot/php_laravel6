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

Route::get('/', function () {
    return view('welcome');
});

//VueController
Route::get('/downZip', 'Test\DownZipController@index');
Route::get('/vue', 'Vue\VueController@index');
Route::post('/uploadFile', 'Vue\VueController@uploadFile');
Route::get('/viewer', 'Vue\VueController@viewer');
