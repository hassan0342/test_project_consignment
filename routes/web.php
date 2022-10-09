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

// user/register
Route::get('user/register', 'User\UserController@register');
Route::post('user/register_save', 'User\UserController@register_save');

// 

// login
Route::get('user/login', 'User\UserController@login');
Route::post('user/checklogin', 'User\UserController@checklogin');

// user_logout
Route::get('user/logout', 'User\UserController@logout');



// consignment
Route::get('user/consignment', 'User\ConsignmentController@index')->name('consignment.index');

//add
Route::get('user/consignment/create', 'User\ConsignmentController@create')->name('consignment.create'); 
// save
Route::post('user/consignment/save', 'User\ConsignmentController@save')->name('consignment.save');
// pdf
// user/consignment/pdf_create
Route::get('user/consignment/pdf_create/{id}', 'User\ConsignmentController@pdf_create')->name('consignment.pdf_create');

