<?php


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('adm','AdminController@index');

Route::get('logar','HomeController@logar')->name('logar');
Route::get('sair','AdminController@sair')->name('sair');



Auth::routes();
// Auth::routes(['register' => false]);
Route::get('home', 'HomeController@index');
Route::get('homepage','HomeController@homepage')->name('homepage');
Route::get('/','HomeController@homepage')->name('homepage');