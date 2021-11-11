<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', array('before' => 'auth', 'uses' => 'HomeController@index'));
//Listado de usuarios
Route::get('/list','UserController@list')->name('list')->middleware('password.confirm');
//Formulario de usuarios
Route::get('/form','UserController@userform')->middleware('password.confirm');
//Guardar usuarios
Route::post('/save','UserController@save')->name('save')->middleware('password.confirm');
//Eliminar usuarios
Route::delete('/delete/{id}','UserController@delete')->name('delete')->middleware('password.confirm');;
//Formulario para editar usuarios
Route::get('/editform/{id}','UserController@editform')->name('editform')->middleware('password.confirm');;
//Edición de usuarios
Route::patch('/edit/{id}','UserController@edit')->name('edit')->middleware('password.confirm');;
//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
