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
Route::get('/areas', 'AreasController@index');
Route::post('/areas', 'AreasController@save');
Route::get('/areas/registrar', 'AreasController@add');
Route::get('/areas/registrarlote', 'AreasController@addLote');

Route::get('/invitados', 'ProfesionalesController@invitados');
Route::get('/docentes', 'ProfesionalesController@docentes');

Route::get('/docentes/registrarDocente', function(){
    return view('docente.registrarDocente');
});
Route::get('/docentes/registrarDocentePorLote', function(){
    return view('docente.registrarDocentePorLote');
});