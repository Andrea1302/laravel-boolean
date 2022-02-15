<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'GuestController@guest')->name('guest');
Route::get('/postcards', 'HomeController@home')->name('postcards.view');
Route::get('/create/postcard', 'HomeController@create')->name('create');

Route::post('/store', 'HomeController@store')->name('store');

// delete postcard
Route::get('/delete/postcard/{id}','HomeController@delete')-> name('delete');
// Edit
route::get('edit/postcard/{id}','HomeController@edit')->name('edit');
// update
Route::post('/update/postcard', 'HomeController@update')->name('update.postcard');

// auth

Route::post('/register', 'Auth\RegisterController@register') -> name('register');
Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');

// api 
route::get('api/getPostcards','ApiController@getPostcards')->name('api.getPostcards');

