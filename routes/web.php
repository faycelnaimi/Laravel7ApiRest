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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', 'UsersController@usersAll');
Route::get('/students', 'UsersController@studentsAll');
//Route::get('/form-add-student', 'UsersController@formAddStudent');
Route::get('/form-add-student', function () {
    return view('addStudent');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard', 'UserController@dashboard')->middleware('auth');

