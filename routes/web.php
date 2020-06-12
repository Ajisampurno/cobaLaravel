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
Route::get('/', 'AuthController@getlogin');

Route::post('/', 'AuthController@postlogin');

Route::get('/registrasi', 'AuthController@getregistrasi');

Route::post('/registrasi', 'AuthController@postregistrasi');

//PAGES
Route::get('/index', 'PagesController@home');
Route::get('/about', 'PagesController@about');



//MAHASISWA
//Route::get('/mahasiswa', 'MahasiswaController@index');
Route::resource('mahasiswa','MahasiswaController');

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
Route::resource('students','StudentsController');