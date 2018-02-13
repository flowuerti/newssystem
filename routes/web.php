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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/news/new', 'NewsController@create')->middleware('auth');
Route::post('admin/news/new', 'NewsController@save')->middleware('auth');
Route::get('admin/news/edit/{id}', 'NewsController@edit')->middleware('auth');
Route::post('admin/news/edit/{id}', 'NewsController@update')->middleware('auth');

Route::get('/', 'NewsController@overview');
Route::get('news/{id}', 'NewsController@view')->name('news');

Route::get('category/new', 'CategoryController@create')->middleware('auth');
Route::post('category/new', 'CategoryController@save')->middleware('auth');
