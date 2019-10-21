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

Route::get('/home', function () {
    return view('question.task');
});


Route::get('/print', function () {
    return view('question.print');
});

  Route::post('/store', 'Question\QuestionController@store')->name('question.store');
  //Route::get('/show/{id}', 'Question\QuestionController@show')->name('question.show');
  Route::get('/show', 'Question\QuestionController@show')->name('question.show');