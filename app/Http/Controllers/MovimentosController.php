<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Redirect;
use App\Models\Movimento;
use App\Models\Empresa;


class MovimentosController extends Controller
{
    public function index(){

        $movimentos = Movimento::get();
        $empresas = Empresa::get();
        
        $receitas = DB::table('movimentos')
                ->where('tipo', '=', "R")
                ->sum('valor');
        
        $custos = DB::table('movimentos')
                ->where('tipo', '=', "C")
                ->sum('valor');
      
        return view('movimentos.list', [
            'movimentos' => $movimentos,
            'receitas' => $receitas,
            'custos' => $custos,
            'empresas' => $empresas
        ]);
    }


    public function new(){
        $movimentos = Movimento::get();
        $empresas = Empresa::get();
        return view('movimentos.form', [
            'movimentos' => $movimentos,
            'empresas' => $empresas
        ]);
    }

    public function add(Request $request){
        $movimento = new Movimento;
        $movimento = $movimento->create( $request->all() );
        return Redirect::to('/movimentos');
    }

    public function edit( $id ){
        $movimento = Movimento::findOrFail( $id );
        $empresas = Empresa::get();
        return view('movimentos.form', [
            'movimento' => $movimento,
            'empresas' => $empresas
        ]);
    }

    public function update( $id, Request $request){
        $movimento = Movimento::findOrFail( $id );
        $movimento->update( $request->all() );
        return Redirect::to('/movimentos');
    }

    public function delete( $id ){
        $movimento = Movimento::findOrFail( $id );
        $movimento->delete();
        return Redirect::to('/movimentos');
    }
}
