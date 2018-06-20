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

Route::get('/home', 'TaskController@index')->name('home');

Route::get('/bookmarks', 'TaskController@indexBookmarks')->name('bookmark-page');

Route::get('/settings', 'ProfileController@index')->middelware('auth')->name('settings-page');

Route::get('/create', 'TaskController@indexcreate')->name('create-page');

//all routes for saving


Route::patch('/bookmark/{task}', 'TaskController@saveBookmarks')->name('bookmark-task');
Route::patch('/color/{task}', 'TaskController@saveColor')->name('color-task');
Route::delete('/task/{task}', "TaskController@finishTask")->name('finish-task');
Route::post('/settings', 'ProfileController@save');
Route::post('/create', 'TaskController@saveTask');
