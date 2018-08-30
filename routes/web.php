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

// Route::get('/admin',['middleware' => 'admin', function () {
//     return view('administrator.home');
// }]);

// Route::get('/admin', function () {
//     return view('administrator.home');
// })->middleware('admin');

Route::get('/about', function () {
    return view('about');
});

Route::get('/project/create', function () {
    return view('project.create');
})->middleware('auth');
Route::get('/project/ideas','ProjectController@show')->middleware('auth');

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::resource('projects','ProjectController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/welcome', 'ProjectController@create');

Route::get('/project/edit/{id}', 'ProjectController@edit')->middleware('auth');
Route::post('/project/update/{id}', 'ProjectController@update')->middleware('auth');
Route::get('/project/delete/{id}', 'ProjectController@destroy')->middleware('auth');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/user','AdminController@user')->name('admin');
Route::get('/admin/user/destroy/{id}','AdminController@destroy')->name('admin');
Route::get('/admin/user/edit/{id}','AdminController@edit')->name('admin');
Route::post('/admin/user/update/{id}','AdminController@update')->name('admin');
Route::get('/admin/ideas','AdminController@ideas')->name('admin');
Route::get('/admin/idea/edit/{id}','AdminController@ideaEdit')->name('admin');
Route::get('/admin/idea/accept/{id}','AdminController@accept')->name('admin');
Route::get('/admin/idea/decline/{id}','AdminController@decline')->name('admin');
// Route::get('admin/profile', function () {
//     //
// })->middleware('auth');