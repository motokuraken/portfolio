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

Route::get('/', 'TodoController@todoList');

Route::get('/test', function () {
    return view('test');
});

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