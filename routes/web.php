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

Route::get('/',[
    'as' => 'root',
    'uses' => 'PagesController@home'
]);

Route::get('/about',[
    'as' => 'about',
    'uses' => 'PagesController@about'
]);

Route::get('/contact',[
    'as' => 'contact',
    'uses' => 'ContactsController@create'
]);

Route::post('/contact',[
    'as' => 'contact',
    'uses' => 'ContactsController@store'
]);
