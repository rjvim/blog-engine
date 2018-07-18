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


Route::group(['prefix' => 'Pages'], function () {
   Route::resource('pages','Pages/PageController');
});

Route::group(['prefix' => 'Sections'], function () {
   Route::resource('sections','Section/SectionController');
});

Route::group(['prefix' => 'Author'], function () {
   Route::resource('Author','AuthorController');
});
