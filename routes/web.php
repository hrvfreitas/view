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

Route::get('/ola', function(){
  return view('ola');
  // rota para a página ola - criar um arquivo ola.blade.php em view -
  //foi criado um controller com o shell
 });
Route::get('/cursos', 'CursosController@index');
//lembrar de criar os controles pelo shell!!!
Route::get('/cursos/{index}','CursosController@show');
//após isto posso criar a pasta em views
