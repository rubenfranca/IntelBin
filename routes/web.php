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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/caixotes', 'CaixoteLixoController@show');

Route::get('/edificios/{id}', 'EdificiosController@show');

Route::post('/edificios/caixotes', 'EdificiosController@caixotes');

Route::get('/BOcaixotes', 'BackOfficeCaixotes@show');

Route::get('/BOedificios', 'BackOfficeEdificios@show');

Route::get('/BOfuncionarios', 'BackOfficeFuncionarios@show');

Route::get('/BOlocais', 'BackOfficeLocais@show');

Route::get('/BOpisos', 'BackOfficePisos@show');

Route::get('/BOrecolhas', 'BackOfficeRecolhas@show');

Route::get('/BOtipos', 'BackOfficeTipos@show');


Route::post('BoRecolha/{id}','BackOfficeRecolhas@update' );

Route::get('/BoListagens', 'BackOfficeListagens@show');

Route::get('/BoProblemas', 'BackOfficeProblemas@show');




Route::resource('BoEdificio', "BackOfficeEdificios");
Route::resource('BoCaixote', "BackOfficeCaixotes");
Route::resource('BoFuncionario', "BackOfficeFuncionarios");
Route::resource('BoLocal', "BackOfficeLocais");
Route::resource('BoRecolha', "BackOfficeRecolhas");
Route::resource('BoPiso', "BackOfficePisos");


//Route::get('/recolhas', 'BackOfficeRecolhas@index');


//Route::get('/BOutilizadores', 'BackOfficeUtilizadores@show');