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

/**
 * Todoリスト
 */

Route::get('/', 'ProfileController@profile');

Route::get('/profile', 'ProfileController@profile');

Route::get('/todo_regi', 'TodoController@todoRegi');

Route::post('/todo_regi_check', 'TodoController@todoRegiCheck');

Route::post('/todo_regi_done', 'TodoController@todoRegiDone');

Route::get('/todo_list', 'TodoController@todoList');

Route::get('/todo_info/{id}', 'TodoController@todoInfo');

Route::get('/todo_del/{id}', 'TodoController@todoDel');

Route::post('/todo_del_done/{id}', 'TodoController@todoDelDone');

Route::get('/todo_edit/{id}', 'TodoController@todoEdit');

Route::post('/todo_edit_check/{id}', 'TodoController@todoEditCheck');

Route::post('/todo_edit_done/{id}', 'TodoController@todoEditDone');

Route::post('/todo_list', 'TodoController@todoSearch');

/**
 * チャットツール
 */

Route::get('/chat_top', 'ChatController@chatTop');

Route::get('/chat_user_regi', 'ChatController@chatUserRegi');

Route::post('/chat_user_regi_check', 'ChatController@chatUserRegiCheck');

Route::post('/chat_user_regi_done', 'ChatController@chatUserRegiDone');

Route::get('/login', 'LoginController@loginini');

Route::post('/login', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');

