<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/', ['as' => 'site.home', 'uses' => 'App\Http\Controllers\Site\HomeController@index']);
Route::get('/login', ['as' => 'login.index', 'uses' => 'App\Http\Controllers\Site\LoginController@index']);
Route::get('/login/sair', ['as' => 'site.login.sair', 'uses' => 'App\Http\Controllers\Site\LoginController@sair']);
Route::post('/login/entrar', ['as' => 'site.login.entrar', 'uses' => 'App\Http\Controllers\Site\LoginController@entrar']);

//rota protegida pela sessão
Route::group(['middleware' => 'auth'], function () {

    //rota com apelido
    Route::get('/admin/cursos', ['as' => 'admin.cursos', 'uses' => 'App\Http\Controllers\Admin\CursoController@index']);
    Route::get('/admin/cursos/adicionar', ['as' => 'admin.cursos.adicionar', 'uses' => 'App\Http\Controllers\Admin\CursoController@adicionar']);
    Route::post('/admin/cursos/salvar', ['as' => 'admin.cursos.salvar', 'uses' => 'App\Http\Controllers\Admin\CursoController@salvar']);
    Route::get('/admin/cursos/editar/{id}', ['as' => 'admin.cursos.editar', 'uses' => 'App\Http\Controllers\Admin\CursoController@editar']);
    Route::put('/admin/cursos/atualizar/{id}', ['as' => 'admin.cursos.atualizar', 'uses' => 'App\Http\Controllers\Admin\CursoController@atualizar']);
    Route::get('/admin/cursos/deletar/{id}', ['as' => 'admin.cursos.deletar', 'uses' => 'App\Http\Controllers\Admin\CursoController@deletar']);
});

// sem 
//Route::get('/contato', function() {
//    return "Contato";
//});

// parâmetro obrigatório
//Route::get('/contato/{id}', function($id) {
//    return "Contato id = $id";
//});

// parâmetro não obrigatório
//Route::get('/contato/{id?}', function($id = null) {
//    return "Contato id = $id";
//});

/*
Route::post('/contato', function () {
    dd($_POST);
    return "Contato POST";
});

Route::put('/contato', function () {
    return "Contato PUT";
});
*/

//rota para o controller
Route::get('/contato', ['uses' => 'App\Http\Controllers\ContatoController@index']);

Route::post('/contato', ['uses' => 'App\Http\Controllers\ContatoController@criar']);

Route::put('/contato', ['uses' => 'App\Http\Controllers\ContatoController@editar']);
