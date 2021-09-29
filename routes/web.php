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
    return view('auth/login');
});

Route::get('/login', function () {
    return "user cuhh";
});

Auth::routes();

Route::get('/checklist', 'ChecklistController@index')->name('checklist');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/image/upload', 'ImageUploadController@create')->name('image.upload.post');
Route::post('/post/create', 'PostController@create')->name('post.create');
Route::get('/settings', 'HomeController@settings')->name('settings');
Route::get('/poa', 'HomeController@poa')->name('poa');


