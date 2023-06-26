<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\PagesController@index');


Route::get('/about', 'App\Http\Controllers\PagesController@about');


Route::get('/services', 'App\Http\Controllers\PagesController@services');

/*
//Insert dynamic values into the URL
Route::get('/users/{id}', function($id) {
    return 'This is user '.$id;
});
*/