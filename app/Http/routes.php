<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/blog');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/left-sidebar', function () {
    return view('left-sidebar');
});

Route::get('/right-sidebar', function () {
    return view('right-sidebar');
});

Route::get('/no-sidebar', function () {
    return view('no-sidebar');
});

get('blog', 'BlogController@index');
get('blog/{slug}', 'BlogController@showPost');