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

Route::get('/', 'PostsController@index');

// controller => PostsController
// Eloquent model => Post
// migration => create_posts_table posts
// This will make all three
// php artisan make:model Post -mc

//Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');




//posts
//index
//GET /posts
//
//GET /posts/create
//store
//POST /posts
//edit
//GET /posts/{id}/edit
//show
//GET /posts/{id}
//update
//PATCH /posts/{id}
//destroy
//DELETE /posts/{id}
