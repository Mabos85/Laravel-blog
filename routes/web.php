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
/* return dynamic value/prarams to url

Route::get('/users/{id}', function ($id) {
    return  'This is user '.$id;
});

more then one value:
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user '.$name.' whit id '.$id;
});

*/


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route:: resource('/posts', 'PostsController');
