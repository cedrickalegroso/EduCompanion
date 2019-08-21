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


Route::get('/homepage', function () {
    return view('user.home');
})->name('homepage');;

Route::get('/loginuser', function () {
    return view('user.login ');
});



Route::get('/testlayout', function () {
    return view('layouts.user');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/userlogin', 'Auth1Controller@userlogin')->name('userlogin');

Route::get('/', 'HomeController@index')->name('userhome');



/* user games page */


/* forum */




Route::get('/forum', 'ForumController@index')->name('forumpage');

Route::get('/addforum', 'ForumController@addforum')->name('addforum');

/* ------ */




Route::get('/quizgames', function () {
    return view('user.quizgame');
})->name('quizgamespage');

Route::get('/learnpage', function () {
    return view('user.learn');
})->name('learnpage');


Route::get('/myprofile', function () {
    return view('user.profile');
})->name('myprofile');


/* opening games page */

/*
Route::get('/mathquizgame', function () {
    return view('user.quizgames.mathquizgame');
})->name('openmathquiz'); */


Route::get('/mathquizgame', 'QuizGameController@mathquizgame')->name('mathquizgame');

Route::get('/codingquizgame', 'QuizGameController@codingquizgame')->name('codingquizgame');

/* verifying games */


Route::get('/verifymath/{answer}/{points}', 'QuizGameController@verifymath')->name('verifymath');


/* user classes  */




Route::get('/classroompage', 'ClassroomController@classroompage')->name('classroompage');

Route::get('/userenrollclass', 'ClassroomController@userenrollclass')->name('userenrollclass');


Route::get('openclass/{enrolled}', 'ClassroomController@openclass')->name('openclass');

/* -----  */

/* teacher classes  */

Route::get('/teacherclassroompage', 'ClassroomController@teacherclassroompage')->name('teacherclassroompage');


Route::get('/teachercreateclass', 'ClassroomController@teachercreateclass')->name('teachercreateclass');


Route::get('teacheropenclass/{id}', 'ClassroomController@teacheropenclass')->name('teacheropenclass');
/* -----  */