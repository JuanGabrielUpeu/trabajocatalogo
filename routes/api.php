<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([

    'middleware' => 'api',
    // 'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'ChangePasswordController@index');


    Route::get('cliente', 'ClienteController@index');
    Route::get('cliente/{id}', 'ClienteController@show');
    Route::post('cliente', 'ClienteController@create');
    Route::put('cliente/{id}', 'ClienteController@update');
    Route::delete('cliente/{id}', 'ClienteController@destroy');

    Route::get('persona', 'PersonaController@index');
    Route::get('persona/{persona_id}', 'PersonaController@show');
    Route::post('persona', 'PersonaController@create');
    Route::put('persona/{persona_id}', 'PersonaController@update');
    Route::delete('persona/{persona_id}', 'PersonaController@destroy');


    Route::get('rango', 'RangoController@index');
    Route::get('rango/{rango_id}', 'RangoController@show');
    Route::post('rango', 'RangoController@create');
    Route::put('rango/{rango_id}', 'RangoController@update');
    Route::delete('rango/{rango_id}', 'RangoController@destroy');


    Route::get('cursosofer', 'Cursos_OferController@index');
    Route::get('cursosofer/{cursos_of_id}', 'Cursos_OferController@show');
    Route::post('cursosofer', 'Cursos_OferController@create');
    Route::put('cursosofer/{cursos_of_id}', 'Cursos_OferController@update');
    Route::delete('cursosofer/{cursos_of_id}', 'Cursos_OferController@destroy');


    Route::get('egresado', 'EgresadoController@index');
    Route::get('egresado/{egresado_id}', 'EgresadoController@show');
    Route::post('egresado', 'EgresadoController@create');
    Route::put('egresado/{egresado_id}', 'EgresadoController@update');
    Route::delete('egresado/{egresado_id}', 'EgresadoController@destroy');


    Route::get('comentario', 'ComentarioController@index');
    Route::get('comentario/{comentarios_id}', 'comentarioController@show');
    Route::post('comentario', 'comentarioController@create');
    Route::put('comentario/{comentarios_id}', 'comentarioController@update');
    Route::delete('comentario/{comentarios_id}', 'comentarioController@destroy');

    Route::get('escuela', 'EscuelaController@index');
    Route::get('escuela/{escuela_profesional_id}', 'escuelaController@show');
    Route::post('escuela', 'escuelaController@create');
    Route::put('escuela/{escuela_profesional_id}', 'escuelaController@update');
    Route::delete('escuela/{escuela_profesional_id}', 'escuelaController@destroy');


    Route::get('facultad', 'FacultadController@index');
    Route::get('facultad/{facultad_id}', 'FacultadController@show');
    Route::post('facultad', 'FacultadController@create');
    Route::put('facultad/{facultad_id}', 'FacultadController@update');
    Route::delete('facultad/{facultad_id}', 'FacultadController@destroy');


    Route::get('experiencia', 'ExperienciaController@index');
    Route::get('experiencia/{exper_id}', 'ExperienciaController@show');
    Route::post('experiencia', 'ExperienciaController@create');
    Route::put('experiencia/{exper_id}', 'ExperienciaController@update');
    Route::delete('experiencia/{exper_id}', 'ExperienciaController@destroy');


    Route::get('curso', 'CursoController@index');
    Route::get('curso/{curso_id}', 'CursoController@show');
    Route::post('curso', 'CursoController@create');
    Route::put('curso/{curso_id}', 'CursoController@update');
    Route::delete('curso/{curso_id}', 'CursoController@destroy');


    Route::get('empresa', 'EmpresaController@index');
    Route::get('empresa/{empresa_id}', 'EmpresaController@show');
    Route::post('empresa', 'EmpresaController@create');
    Route::put('empresa/{empresa_id}', 'EmpresaController@update');
    Route::delete('empresa/{empresa_id}', 'EmpresaController@destroy');


    Route::get('historial', 'HistorialController@index');
    Route::get('historial/{historial_id}', 'HistorialController@show');
    Route::post('historial', 'HistorialController@create');
    Route::put('historial/{historial_id}', 'HistorialController@update');
    Route::delete('historial/{historial_id}', 'HistorialController@destroy');


    Route::get('egresadodatos', 'EgresadoDatosController@index');
    Route::get('egresadodatos/{id}', 'EgresadoDatosController@show');
    Route::post('egresadodatos', 'EgresadoDatosController@create');
    Route::put('egresadodatos/{id}', 'EgresadoDatosController@update');
    Route::delete('egresadodatos/{id}', 'EgresadoDatosController@destroy');


    Route::get('respuesta', 'RespuestaController@index');
    Route::get('respuesta/{respuesta_id}', 'RespuestaController@show');
    Route::post('respuesta', 'RespuestaController@create');
    Route::put('respuesta/{respuesta_id}', 'RespuestaController@update');
    Route::delete('respuesta/{respuesta_id}', 'RespuestaController@destroy');


    Route::get('oferta', 'OfertaLaboralController@index');
    Route::get('oferta/{oferta_id}', 'OfertaLaboralController@show');
    Route::post('oferta', 'OfertaLaboralController@create');
    Route::put('oferta/{oferta_id}', 'OfertaLaboralController@update');
    Route::delete('oferta/{oferta_id}', 'OfertaLaboralController@destroy');


    Route::get('perfeccionamiento', 'PerfeccionamientoController@index');
    Route::get('perfeccionamiento/{perfeccion_id}', 'PerfeccionamientoController@show');
    Route::post('perfeccionamiento', 'PerfeccionamientoController@create');
    Route::put('perfeccionamiento/{perfeccion_id}', 'PerfeccionamientoController@update');
    Route::delete('perfeccionamiento/{perfeccion_id}', 'PerfeccionamientoController@destroy');

    
    Route::get('Catalogo', 'CatalogoController@index');
    Route::get('Catalogo/{catalogo_id}', 'CatalogoController@show');
    Route::post('Catalogo', 'CatalogoController@create');
    Route::put('Catalogo/{catalogo_id}', 'CatalogoController@update');
    Route::delete('Catalogo/{catalogo_id}', 'CatalogoController@destroy');


    
    Route::get('Imagen', 'ImagençController@index');
    Route::get('Imagen/{imagen_id}', 'ImagençController@show');
    Route::post('Imagen', 'ImagençController@create');
    Route::put('Imagen/{imagen_id}', 'ImagençController@update');
    Route::delete('Imagen/{imagen_id}', 'ImagençController@destroy');


});
