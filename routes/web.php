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

Route::get('/', 'HomeComproinController@index')->name('home-comproin');

Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');
Route::get('roles', ['uses'=>'RolesController@index', 'as'=>'roles.index']);
Route::get('roles/create', ['uses'=>'RolesController@create', 'as'=>'roles.create']);
Route::post('roles', ['uses'=>'RolesController@store', 'as'=>'roles.store']);
Route::get('roles-delete/{id}', ['uses'=>'RolesController@destroy', 'as'=>'roles.destro']);
Route::get('roles/{id}', ['uses'=>'RolesController@edit', 'as'=>'roles.edit']);

// Users
Route::get('users', ['uses'=>'UsersController@index', 'as'=>'users.index']);
Route::get('users/create', ['uses'=>'UsersController@create', 'as'=>'users.create']);
Route::post('users', ['uses'=>'UsersController@store', 'as'=>'users.store']);
Route::get('users-delete/{id}', ['uses'=>'UsersController@destroy', 'as'=>'users.destroy']);
Route::get('users-block/{id}', 
	['uses'=>'UsersController@block', 'as'=>'users.block']);
Route::get('users-activated/{id}', 
	['uses'=>'UsersController@activated', 'as'=>'users.activated']);
Route::get('users/{id}', ['uses'=>'UsersController@edit', 'as'=>'users.edit']);
