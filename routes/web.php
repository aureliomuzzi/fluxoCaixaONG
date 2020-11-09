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

Route::get('empresas','EmpresaController@index');


/* Route::get('/model', function () {
    //$empresas = \App\Models\Empresa::all();
    //return $empresas;

    $empresa = new \App\Models\Empresa();
    $empresa->cliente = 0;
    $empresa->fornecedor = 1;
    $empresa->razaoSocial = 'Distribuidora Melo';
    $empresa->cnpj = '2222222222';
    $empresa->responsavel = 'Karem';

    $empresa->save();

    return \App\Models\Empresa::all();
}); */