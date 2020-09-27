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

Route::get('/', 'GuestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entries/create', 'EntryController@create')->name('entries.create');
Route::post('/entries', 'EntryController@store')->name('entries.store');

// Route::get('entries/{entry:slug}', 'GuestController@show')->name('guest.entry.show');
Route::get('entries/{entryBySlug}', 'GuestController@show')->name('guest.entry.show');

Route::get('entries/{entry}/edit', 'EntryController@edit')->name('entry.edit');
Route::put('entries/{entry}', 'EntryController@update')->name('entry.update');

Route::get('users/{user}', 'UserController@show')->name('users.show');
