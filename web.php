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

Route::get('/createevent', 'EventController@showCreateEvent');
Route::post('/createevent', 'EventController@createEvent');

Route::get('/event/{id}', 'EventController@viewEvent');

Route::get('/login', 'EventController@showLogin');
Route::post('/login', 'EventController@login');
Route::get('/logout', 'EventController@logout');

Route::get('/register', 'EventController@showRegister');
Route::post('/register', 'EventController@registerStudent');