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

    Route::get('/categories', 'CategoryController@index')->name('categories');
    Route::post('/categories', 'CategoryController@store')->name('save-category');
    Route::get('/category/{id}', 'CategoryController@show');

    Route::get('/tags', 'TagController@index')->name('tags');
    Route::post('/tags', 'TagController@store')->name('save-tag');
    Route::get('/tag{id}', 'TagController@show');

    Route::get('/comments', 'CommentController@index')->name('comments');
    Route::get('/comment/{id}', 'CommentController@show');

    Route::get('/users', 'UserController@index')->name('users');
//    Route::get('/users/{id}', 'UserController@show');

    Route::get('/posts', 'PostController@index')->name('posts');
    Route::post('/posts', 'PostController@store')->name('save-post');
    Route::get('/new-post', 'PostController@newPost')->name('add-post');
    Route::get('/posts/{id}', 'PostController@show')->name('show-post');

});
