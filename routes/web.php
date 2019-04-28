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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
//[1] pass information in the url
Route::get('/users/{id}/{name}', function ($id,$name) {
    return 'Name: '.$name.' ID: '.$id;
});
*/

//[2/3] use route to call a controller and its method
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

