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
    return view('welcome');
});

Route::post("/enviar", function(Illuminate\Http\Request $request) {
	
	$formulario = new App\Models\formulario();
	$formulario-> nome = $request->get('nome');
	$formulario-> codigo =$request->get('codigo');
	$formulario-> categoria =$request->get('categoria');
	$formulario-> preco =$request->get('preco');
	$formulario-> mensagem =$request->get('mensagem');

   $formulario->save();

   echo "Sua mensagem foi armazenada com sucesso! Código" . $formulario->id;
      });
Route::get('/lista', function(){
   	return view('lista', array('formularios' => App\Models\formulario::all()));
   });
