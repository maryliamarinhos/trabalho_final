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

    
//Chamando o controllador
Route::get('/sobre', 'PaginaBasicaController@sobre');
Route::get('/contato', 'PaginaBasicaController@contato');

//Rotas para parte de Livros
Route::get('/livros', 'LivrosController@livros');
Route::get('/livros/form-adicionar', 'LivrosController@formAdicionar');
Route::post('/livros/adicionar', 'LivrosController@adicionar');
Route::get('/livros/excluir/{id}', 'LivrosController@excluir');
Route::get('/livros/editar/{id}', 'LivrosController@form_editar');
Route::post('/livros/editar', 'LivrosController@editar');

//Rotas para parte de Categorias
Route::get('/categorias', 'CategoriasController@categorias');
Route::get('/categorias/form-adicionar', 'CategoriasController@formAdicionar');
Route::post('/categorias/adicionar', 'CategoriasController@adicionar');
Route::get('/categorias/excluir/{id}', 'CategoriasController@excluir');
Route::get('/categorias/editar/{id}', 'CategoriasController@form_editar');
Route::post('/categorias/editar', 'CategoriasController@editar');

// ver sobre a criação de uma rota única
Route::get('/', function (){
    return view ('welcome');
});