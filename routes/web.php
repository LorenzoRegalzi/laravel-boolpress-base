<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', 'PostController@index')->name('post.index');
// Route::get('/create', 'PostController@create')->name('post.create');

Route::get('/published', 'PostController@published')->name('post.published');   //rotta che il controller non prevede e che creiamo noi


Route::resource('posts', 'PostController');                                     //qua abbaimo tutte le rotte previste nel controller
