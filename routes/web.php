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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/create', 'BookController@create')->name('create');
Route::post('create', 'BookController@showForm')->name('createForm');
Route::get('/view', 'BookController@ViewAll')->name('ViewAll');
Route::get('/update/{id}', 'BookController@UpdateForm')->name('ShowForm');
Route::patch('update/{id}', 'BookController@Update')->name('Update');
Route::delete('delete/{id}', 'BookController@Delete')->name('HapusBuku');

