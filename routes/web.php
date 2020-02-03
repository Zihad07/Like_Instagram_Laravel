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

Auth::routes();

Route::post('/follow/{user}','FollowsController@store')->name('follow.user');
//Route::post('/follow/{user}',function (){
//    return ['success'];
//});

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'ProfilesController@index')->name('home');
Route::get('/profile/{user}','ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit','ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}','ProfilesController@update')->name('profile.update');

Route::get('/p','PostsController@create')->name('post.create');
Route::post('/p','PostsController@store')->name('post.store');
Route::get('/p/{post}','PostsController@show')->name('post.show');
