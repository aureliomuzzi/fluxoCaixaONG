<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\Empresa;

class EmpresasController extends Controller
{
    public function index(){

        $empresas = Empresa::get();
        return view('empresas.list', ['empresas' => $empresas]);
    }

    public function new(){
        return view('empresas.form');
    }

    public function add(Request $request){
        $empresa = new Empresa;
        $empresa = $empresa->create( $request->all() );
        return Redirect::to('/empresas');
    }

    public function edit( $id ){
        $empresa = Empresa::findOrFail( $id );
        return view('empresas.form', ['empresa' => $empresa]);
    }

    public function update( $id, Request $request){
        $empresa = Empresa::findOrFail( $id );
        $empresa->update( $request->all() );
        return Redirect::to('/empresas');
    }

    public function delete( $id ){
        $empresa = Empresa::findOrFail( $id );
        $empresa->delete();
        return Redirect::to('/empresas');
    }
}
