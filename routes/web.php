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

Route::get('/', 'EventController@home');
Route::post('/', 'EventController@joinEvent');

Route::get('/changedetails', 'EventController@showChangeDetails');
Route::post('/changedetails', 'EventController@updateUser');
Route::get('/changepassword', 'EventController@showChangePassword');
Route::post('/changepassword', 'EventController@changePassword');

Route::get('/admin', 'EventController@adminEventStatus');
Route::post('/admin', 'EventController@deleteEvent');
Route::get('/admin_createevent', 'EventController@adminCreateEvent');
Route::post('/admin_createevent', 'EventController@createEvent');
Route::get('/admin_updateevent', 'EventController@adminUpdateEvent');
Route::post('/admin_updateevent', 'EventController@updateEvent');

Route::get('/admin_users', 'EventController@adminUsers');
Route::post('/admin_users', 'EventController@deleteUser');

Route::get('/event/{id}', 'EventController@viewEvent');

Route::get('/login', 'EventController@showLogin');
Route::post('/login', 'EventController@login');
Route::get('/logout', 'EventController@logout');

Route::get('/adminlogin', 'EventController@showAdminLogin');
Route::post('/adminlogin', 'EventController@adminLogin');

Route::get('/register', 'EventController@showRegister');
Route::post('/register', 'EventController@registerStudent');