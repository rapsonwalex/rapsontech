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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/generate_code', 'HomeController@generate_code');

Route::get('/', 'RapsontechController@main');


Route::post('contact', 'RapsontechController@postContact');

Route::get('/web_questionnaires/{id}', 'RapsontechController@web_questionnaires');
Route::patch('save_updated_web_questionnaires/{id}', 'RapsontechController@save_updated_web_questionnaires');

Route::post('/deleteq', 'RapsontechController@deleteq');

