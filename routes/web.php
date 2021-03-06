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
    return view('auth/login');
});
//auth/login

Auth::routes();


Route::resource('impacto','ImpactoController');

Route::resource('probabilidad','ProbabilidadController');

Route::resource('actividad','ActividadController');

Route::resource('responsabilidad','ResponsabilidadController');

Route::resource('rol','RolController');

Route::resource('user','UserController');
Route::get('user/{ID}/destroy',[
	       'uses' => 'UserController@destroy',
	        'as'  => 'user.destroy'
	    ]);


Route::resource('activo','ActivoController');

Route::get('activo/{ID}/destroy',[
	       'uses' => 'ActivoController@destroy',
	        'as'  => 'activo.destroy'
	    ]);

Route::resource('riesgo','RiesgoController');

Route::get('riesgo/{ID}/destroy',[
	       'uses' => 'RiesgoController@destroy',
	        'as'  => 'riesgo.destroy'
	    ]);

Route::resource('analisisRs','AnalisisRsController');

Route::get('analisisRs/{ID}/destroy',[
	       'uses' => 'AnalisisRsController@destroy',
	        'as'  => 'analisisRs.destroy'
	    ]);

Route::resource('evaluacionRs','EvaluacionRsController');

Route::resource('tratamiento','TratamientoController');

Route::get('tratamiento/{idOpcionTratamiento}/index',[
		    'uses' =>'TratamientoController@index', 
			'as' => 'tratamiento.index']);

Route::get('tratamiento/{idActivo}/create',[
		    'uses' =>'TratamientoController@create', 
			'as' => 'tratamiento.create']);



Route::resource('control','ControlController');
Route::get('listcont/{ID}','ControlController@listcont');
Route::get('obtenerid/{ID}','ControlController@obtenerid');
Route::get('obtenerdatos/{ID}','ControlController@obtenerdatos');

Route::get('control/{ID}/destroy',[
	       'uses' => 'ControlController@destroy',
	        'as'  => 'control.destroy'
	    ]);

Route::resource('controles','ControlesController');

Route::get('controles/{idRiesgo},{idOpcionTratamiento}/index',[
		    'uses' =>'ControlesController@index', 
			'as' => 'controles.index']);

Route::get('acciones/{ID}', 'ControlesController@acciones');
Route::get('sacarid/{ID}','ControlesController@sacarid');

Route::get('controles/{idRiesgo},{idOpcionTratamiento}/create',[
		    'uses' =>'ControlesController@create', 
			'as' => 'controles.create']);


Route::resource('plan','PlanController');

Route::get('listar/{idRiesgo},{idOpcionTratamiento}','PlanController@listar');

Route::get('plan/{ID}/destroy',[
	       'uses' => 'PlanController@destroy',
	        'as'  => 'plan.destroy'
	    ]);

Route::get('plan/{idRiesgo},{idOpcionTratamiento},{idControlL}/create',[
		    'uses' =>'PlanController@create', 
			'as' => 'plan.create']);

Route::get('obtenertratamiento/{ID}','PlanController@obtenertratamiento');

Route::get('/home', 'HomeController@index')->name('home');