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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/create','PertanyaanController@create');

Route::post('/pertanyaan','PertanyaanController@store');

Route::get('pertanyaan/{question_id}','PertanyaanController@show');
Route::get('pertanyaan/{question_id}/edit','PertanyaanController@edit');
Route::put('pertanyaan/{question_id}','PertanyaanController@update');
Route::delete('pertanyaan/{question_id}','PertanyaanController@destroy');
