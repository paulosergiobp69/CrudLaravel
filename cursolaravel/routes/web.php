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
*/
/*
Route::get('/', function () {
    return view('home');
});
*/
Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);
Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);

/*
Route::get('/contato/{id?}', function ($id = null) {
    return "Contato id= $id";
});


Route::post('/contato', function () {
	dd($_POST);
    return "Contato Post";
});

Route::put('/contato', function () {
    return "Contato PUT";
});

*/
Route::get('/contato/{id?}', ['uses'=>'ContatoController@index']) ;

Route::post('/contato', ['uses'=>'ContatoController@criar']) ;

Route::put('/contato', ['uses'=>'ContatoController@editar']) ;

/* controle de acesso para o site middlewae*/
Route::group(['middleware'=>'auth'],function(){
    // definir rotas com apelido
    Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'Admin\CursoController@index']);
    Route::get('/admin/cursos/Adicionar',['as'=>'admin.cursos.adicionar','uses'=>'Admin\CursoController@adicionar']);
    Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\CursoController@salvar']);
    Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\CursoController@editar']);
    Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursoController@atualizar']);
    Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\CursoController@deletar']);
});





