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

// Blog pages

get('/', function () {
    return redirect('blog/home');
});

//get('blog', 'BlogController@index');
get('blog/home', 'BlogController@home');
get('blog/posts', 'BlogController@posts');
get('blog/{slug}', 'BlogController@showPost');

// contac email
get('contact', 'ContactController@showForm');
post('contact', 'ContactController@sendContactInfo');

// Rss Feed
get('rss', 'BlogController@rss');

//Site Map
get('sitemap.xml', 'BlogController@siteMap');



// Admin area
get('admin', function () {
    return redirect('/admin/post');
});


$router->group([
    'namespace' => 'Admin',
    'middleware' => 'auth',
], function () {
    resource('admin/post', 'PostController', ['except' => 'show']);
    resource('admin/tag', 'TagController', ['except' => 'show']);

    // upload
    get('admin/upload', 'UploadController@index');
    post('admin/upload/file', 'UploadController@uploadFile');
    delete('admin/upload/file', 'UploadController@deleteFile');
    post('admin/upload/folder', 'UploadController@createFolder');
    delete('admin/upload/folder', 'UploadController@deleteFolder');

});

// Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');



