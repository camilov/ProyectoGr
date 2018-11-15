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

/*Route::resource([
	'actividad'=>'ActividadController',
	'responsabilidad'=>'ResponsabilidadController',
	'rol'=>'RolController',
	'user'=>'UserController',
]);*/
Route::resource('actividad','ActividadController');

Route::resource('responsabilidad','ResponsabilidadController');

Route::resource('rol','RolController');

Route::resource('user','UserController');

Route::resource('activo','ActivoController');

Route::resource('riesgo','RiesgoController');

Route::resource('analisisRs','AnalisisRsController');

Route::resource('evaluacionRs','EvaluacionRsController');

Route::resource('tratamiento','TratamientoController');

Route::get('tratamiento/{idActivo}/create',[
		    'uses' =>'TratamientoController@create', 
			'as' => 'tratamiento.create']);



Route::resource('control','ControlController');

Route::resource('controles','ControlesController');

Route::get('controles/{idRiesgo},{idOpcionTratamiento}/create',[
		    'uses' =>'ControlesController@create', 
			'as' => 'controles.create']);


Route::resource('plan','PlanController');

Route::get('plan/{idRiesgo},{idOpcionTratamiento}/create',[
		    'uses' =>'PlanController@create', 
			'as' => 'plan.create']);


