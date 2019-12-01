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


Auth::routes(['verify' => true]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('cliente/index',"ClienteController@index");
Route::get('cliente/show/{id}',"ClienteController@show");

Route::get('egresado/index',"EgresadoController@index");
Route::get('egresado/show/{egresado_id}',"EgresadoController@show");

Route::get('egresadodatos/index',"EgresadoDatosController@index");
Route::get('egresadodatos/show/{id}',"EgresadoDatosController@show");


Route::get('cursosofer/index',"EgresadoController@index");
Route::get('cursosofer/show/{egresado_id}',"EgresadoController@show");


Route::get('comentario/index',"ComentarioController@index");
Route::get('comentario/show/{comentarios_id}',"ComentarioController@show");

Route::get('curso/index',"CursoController@index");
Route::get('curso/show/{curso_id}',"CursoController@show");

Route::get('empresa/index',"EmpresaController@index");
Route::get('empresa/show/{empresa_id}',"EmpresaController@show");

Route::get('escuela/index',"EscuelaController@index");
Route::get('escuela/show/{escuela_profesional_id}',"EscuelaController@show");

Route::get('experiencia/index',"ExperienciaController@index");
Route::get('experiencia/show/{exper_id}',"ExperienciaController@show");

Route::get('facultad/index',"FacultadController@index");
Route::get('facultad/show/{facultad_id}',"FacultadController@show");

Route::get('historial/index',"HistorialController@index");
Route::get('historial/show/{historial_id}',"HistorialController@show");

Route::get('oferta/index',"OfertaLaboralController@index");
Route::get('oferta/show/{oferta_id}',"OfertaLaboralController@show");

Route::get('perfeccionamiento/index',"PerfeccionamientoController@index");
Route::get('perfeccionamiento/show/{perfeccion_id}',"PerfeccionamientoController@show");

Route::get('persona/index',"PersonaController@index");
Route::get('persona/show/{persona_id}',"PersonaController@show");

Route::get('rango/index',"RangoController@index");
Route::get('rango/show/{rango_id}',"RangoController@show");

Route::get('respuesta/index',"RespuestaController@index");
Route::get('respuesta/show/{respuesta_id}',"RespuestaController@show");


Route::get('Catalogo/index',"CatalogoController@index");
Route::get('Catalogo/show/{catalogo_id}',"CatalogoController@show");

Route::get('Imagen/index',"ImagençController@index");
Route::get('Imagen/show/{iomagen_id}',"ImagençController@show");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
