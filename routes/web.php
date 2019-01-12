<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|


GET /projects (index)
GET /projects/create (create)
GET /projects/1 (show)          //id=1
POST /projects (store)
GET /projects/1/edit (edit)
PATCH /projects/1  (update)  
DELETE /projects/1 (destroy)

*/


Route::get('/', 'HomeController@index')->name("main");
Route::get('/minor', 'HomeController@minor')->name("minor");


Route::resource('/projects','ProjectsController');
Route::resource('/aluno','AlunoController'); 
Route::resource('/conteudoAnexos','ConteudoAnexosController'); 
Route::resource('/conteudo','ConteudoController'); 
Route::resource('/exercicioDicas','ExercicioDicasController'); 
Route::resource('/respostas','RespostasController'); 

/*
Route::get('/projects','ProjectsController@index');
Route::get('/projects/create','ProjectsController@create');
Route::get('/projects/{project}','ProjectsController@show');
Route::post('/projects','ProjectsController@store');
Route::get('/projects/{project}/edit','ProjectsController@update');
Route::patch('/projects/{project}','ProjectsController@index');
Route::delete('/projects/{project}','ProjectsController@destroy');
*/


//Route::get('/contato', 'NovoController@novo');
//Route::get('/contato', 'OutrosController@contato')->name("contato");

