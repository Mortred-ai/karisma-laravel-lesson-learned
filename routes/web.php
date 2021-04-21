<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DataController;
// use App\Http\Controllers\BlogController;

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

Route::get('/', 'DataController@index')->name("index");

Route::get('/data', 'DataController@create')->name("create");
Route::post('/data/store', 'DataController@store')->name("store");
Route::get('/data/{id}/edit', 'DataController@edit')->name("edit");
Route::put('/data/update/{id}', 'DataController@update')->name("update");
Route::delete('/data/delete/{id}', 'DataController@delete')->name("delete");


Route::Resource('blogs', 'BlogController');
