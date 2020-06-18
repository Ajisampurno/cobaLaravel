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


//AUTHENTIKASI
Route::get('/', 'AuthController@getlogin') ->name('login') -> middleware('guest');
Route::post('/', 'AuthController@postlogin') -> middleware('guest');
Route::get('/registrasi', 'AuthController@getregistrasi') -> middleware('guest');
Route::post('/registrasi', 'AuthController@postregistrasi') -> middleware('guest');
Route::get('/logout', 'AuthController@logout') -> name('logout');

//PAGES
Route::get('/index', 'PagesController@home') -> middleware('auth');
Route::get('/about', 'PagesController@about') -> middleware('auth');



//MAHASISWA
Route::get('/mahasiswa', 'MahasiswaController@index') -> middleware('auth');

//STUDENTS
/*
Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');
Route::delete('/students/{student}', 'StudentsController@destroy');
Route::get('/students/{student}', 'StudentsController@edit');
Route::patch('/students/{student}','StudentsController@update');
*/
Route::resource('students','StudentsController') -> middleware('auth');