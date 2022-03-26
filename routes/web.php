<?php
use App\todo_list;
use App\Http\Controllers\TodoListController;
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

Route::get('/','TodoListController@index');

/* put this function into todolist controller that named index
 function () {
    return view('welcome')->with('todo_arr',todo_list::all());
} */

Route::get('create','TodoListController@create');
Route::get('todo_submit','TodoListController@store');
Route::get('delete/{id}','TodoListController@destroy');
Route::get('edit/{id}','TodoListController@edit');
Route::get('update_list/{id}','TodoListController@update');