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
    return view('loginAndRegister');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/project/create', function () {
    return view('project/create');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('projects','ProjectController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/idea_post', 'ProjectController@create');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
