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


Route::get('/testlayout', function () {
    return view('layouts.user');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/userhome', 'HomeController@index')->name('userhome');



/* user games page */

Route::get('/classroom', function () {
    return view('user.classroom');
})->name('classroompage');

Route::get('/forum', function () {
    return view('user.forum');
})->name('forumpage');

Route::get('/quizgames', function () {
    return view('user.quizgame');
})->name('quizgamespage');


/* opening games page */


Route::get('/mathquizgame', function () {
    return view('user.quizgames.mathquizgame');
})->name('openmathquiz');