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
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function () {

    Route::get('/categories', 'CategoryController@index');
    Route::post('/categories', 'CategoryController@store')->name('save-category');
    Route::get('/category/{id}', 'CategoryController@show');

    Route::get('/tags', 'TagController@index');
    Route::post('/tags', 'TagController@store')->name('save-tag');
    Route::get('/tag{id}', 'TagController@show');

    Route::get('/comments', 'CommentController@index');
    Route::get('/comment{id}', 'CommentController@show');

});
