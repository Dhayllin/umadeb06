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
use App\Igreja;

Route::get('/', function () {
    $igrejas = Igreja::all();
                 
    return view('adminlte::jovens/create',compact('igrejas'));
});

Route::group(['middleware' => 'web'], function () {

     
    Route::get('jovens/lideres_index/{igreja_id}','JovensController@lideresIndex')->name('lideres_index');
    
    Route::resource('jovens', 'JovensController');
   
    Route::resource('igrejas', 'IgrejaController');

    Route::resource('users', 'UserController');
   
    Route::get('lideres_home/{igreja_id}','HomeController@lideresHome')->name('lideres_home');
});
