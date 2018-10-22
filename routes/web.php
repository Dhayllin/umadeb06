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

    // líder tem acesso aos jovens da sua igreja
    Route::get('jovens/lideres_index/{igreja_id}','JovensController@lideresIndex')->name('lideres_index');
    // Líder setoria tem acesso a cada igreja, edita e excluí.
    Route::get('jovens/index_lider_setorial/{igreja_id}','JovensController@lideresIndexSetorial')->name('index_lider_setorial');
  
    Route::get('jovens/{igreja_id}/edit_lider_setorial','JovensController@editLiderSetorial')->name('editLiderSetorial'); 
    Route::post('jovens/{id}','JovensController@updateLiderSetor')->name('updateLiderSetor');
    Route::get('jovens/showLiderSetor/{igreja_id}','JovensController@showLiderSetor')->name('showLiderSetor');

    Route::get('relatorios/presentes', 'UserController@presentes')->name('presentes');
    Route::get('jovens/checkin', 'JovensController@checkin')->name('checkin');
    Route::get('jovens/{id}/checkin','JovensController@checkinUpdate')->name('checkinUpdate');

    Route::get('agendas/calendario','EventoController@calendario')->name('calendario');   
    Route::get('agendas/api','EventoController@api')->name('agendas.api');
  



    
    Route::resource('users', 'UserController');
    Route::resource('jovens', 'JovensController');   
    Route::resource('igrejas', 'IgrejaController');    
    Route::resource('eventos', 'EventoController');
   
    Route::get('lideres_home/{igreja_id}','HomeController@lideresHome')->name('lideres_home');
});
