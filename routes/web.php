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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
   
   
   
});

 Route::get('/vagas', 'site\OpportunitieController@index');
 
 Route::get('/formacoes', 'admin\FormationController@index');
 
 Route::resource('/cadastrarVagas', 'site\OpportunitieController');
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
