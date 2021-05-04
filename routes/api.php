<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// COMMENTS

// Verb	 URI	Action	Route Name

// Get all comments
// GET	/comments	index	comments.index
Route::middleware('auth:api')->get('/comments', 'API\CommentAPIController@index');

// See the form for creating a comment
// GET	/comments/create	create	comments.create
Route::middleware('auth:api')->get('/comments/create', 'API\CommentAPIController@create');


// Create a comment and save it
// POST	/comments	store	comments.store
Route::middleware('auth:api')->post('/comments', 'API\CommentAPIController@store');

// Show a SPECIFIC comment
// GET	/comments/{photo}	show	comments.show
Route::middleware('auth:api')->get('/comments/{comment}', 'API\CommentAPIController@show');


// Edit a comment
// GET	/comments/{photo}/edit	edit	comments.edit
Route::middleware('auth:api')->get('/comments/{comment}/edit', 'API\CommentAPIController@edit');

// Update a comment
// PUT/PATCH	/comments/{photo}	update	comments.update
Route::middleware('auth:api')->put('/comments/{comment}', 'API\CommentAPIController@update');


// Delete a comment
// DELETE	/comments/{photo}	destroy	comments.destroy
Route::middleware('auth:api')->delete('/comments/{comment}', 'API\CommentAPIController@destroy');

// POSTS

// Verb	 URI	Action	Route Name

// Get all comments
// GET	/posts	index	comments.index
Route::middleware('auth:api')->post('/posts', 'API\PostAPIController@index');

// Create a post and save it
// POST	/posts	store	comments.store
Route::middleware('auth:api')->post('/posts/store', 'API\PostAPIController@store');

// Delete a post
// DELETE	/posts/{post}	destroy	posts.destroy
Route::middleware('auth:api')->delete('/posts/{post}', 'API\PostAPIController@destroy');




// Create an image and save it
// POST	/posts	store	comments.store
Route::middleware('auth:api')->post('/image/store', 'API\PostAPIController@store');
