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

Route::group(['middleware' => 'web'], function() {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
});

//Rota de Usuarios
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->middleware('auth');
Route::get('/usuarios/new', [App\Http\Controllers\UsuariosController::class, 'new'])->middleware('auth');
Route::post('/usuarios/add', [App\Http\Controllers\UsuariosController::class, 'add'])->middleware('auth');
Route::get('/usuarios/{id}/edit', [App\Http\Controllers\UsuariosController::class, 'edit'])->middleware('auth');
Route::post('/usuarios/update/{id}', [App\Http\Controllers\UsuariosController::class, 'update'])->middleware('auth');
Route::delete('/usuarios/delete/{id}', [App\Http\Controllers\UsuariosController::class, 'delete'])->middleware('auth');

//Rotas de Empresas
Route::get('/empresas', [App\Http\Controllers\EmpresasController::class, 'index'])->middleware('auth');
Route::get('/empresas/new', [App\Http\Controllers\EmpresasController::class, 'new'])->middleware('auth');
Route::post('/empresas/add', [App\Http\Controllers\EmpresasController::class, 'add'])->middleware('auth');
Route::get('/empresas/{id}/edit', [App\Http\Controllers\EmpresasController::class, 'edit'])->middleware('auth');
Route::post('/empresas/update/{id}', [App\Http\Controllers\EmpresasController::class, 'update'])->middleware('auth');
Route::delete('/empresas/delete/{id}', [App\Http\Controllers\EmpresasController::class, 'delete'])->middleware('auth');

//Rotas de Movimentos
Route::get('/movimentos', [App\Http\Controllers\MovimentosController::class, 'index'])->middleware('auth');
Route::get('/movimentos/new', [App\Http\Controllers\MovimentosController::class, 'new'])->middleware('auth');
Route::post('/movimentos/add', [App\Http\Controllers\MovimentosController::class, 'add'])->middleware('auth');
Route::get('/movimentos/{id}/edit', [App\Http\Controllers\MovimentosController::class, 'edit'])->middleware('auth');
Route::post('/movimentos/update/{id}', [App\Http\Controllers\MovimentosController::class, 'update'])->middleware('auth');
Route::delete('/movimentos/delete/{id}', [App\Http\Controllers\MovimentosController::class, 'delete'])->middleware('auth');