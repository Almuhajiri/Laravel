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


Route::get('/input', 'Form_Controller@input');
Route::post('/form/input-process','Form_Controller@inputprocess');
Route::get('/view', 'Form_Controller@view');
Route::get('/destroy/{id}', 'Form_Controller@destroy');
Route::get('/edit/{id}', 'Form_Controller@edit');
Route::post('/update/{id}', 'Form_Controller@update');