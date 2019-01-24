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

Route::get('/post','postController@post');
Route::get('/profile','profileController@profile');
Route::get('/category','categoryController@category');
Route::post('/addCategory','categoryController@addCategory');
Route::post('/addProfile','profileController@addProfile');
Route::post('/addPost','postController@addPost');
Route::get('/view/{id}','postController@view');
Route::get('/edit/{id}','postController@edit');
Route::post('/editPost/{id}','postController@editPost');
Route::get('/delete/{id}','postController@deletePost');
route::get('/like/{id}', 'postController@like');   
route::get('/dislike/{id}', 'postController@dislike'); 
route::post('/comment/{id}', 'postController@comment');