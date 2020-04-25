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

Route::get('/','UserController@index');
Route::get('/cart','UserController@cart');
Route::get('/login','UserController@login');
Route::post('/login','UserController@loginuser');
Route::get('/register','UserController@register');
Route::post('/register','UserController@registeruser');
Route::get('/contact','UserController@contact');
//Route::post('/contact','UserController@sendmessage');
Route::get('/about','UserController@about');
Route::post('/addToCart/{id}','UserController@addToCart');
Route::get('/product/{id}','UserController@product');
Route::get('/category/{id}','UserController@category');

