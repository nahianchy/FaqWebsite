<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\adminController;

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

Route::get('/home','adminController@index')->name('home');

Route::get('/index', function () {
    return view('layout.index');
});




Route::get('/create', function () {
    return view('layout.create');
});

Route::post('/insertData','adminController@store');






Route::get('/edit/{id}','adminController@edit')->name('layout.edit');

Route::put('/update{id}','adminController@update')->name('layout.update');


Route::get('show/{id}','adminController@show')->name('layout.show');


Route::get('destroy/{id}','adminController@destroy')->name('destroy');






Route::get('/viewUser','ViewController@index');






