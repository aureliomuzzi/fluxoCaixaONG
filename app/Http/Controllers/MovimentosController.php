<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Redirect;
use App\Models\Movimento;

class MovimentosController extends Controller
{
    public function index(){

        $movimentos = Movimento::get();
        
        $receitas = DB::table('movimentos')
                ->where('tipo', '=', "R")
                ->sum('valor');
        
        $custos = DB::table('movimentos')
                ->where('tipo', '=', "C")
                ->sum('valor');

        return view('movimentos.list', [
            'movimentos' => $movimentos,
            'receitas' => $receitas,
            'custos' => $custos
        ]);
    }

    public function new(){
        return view('movimentos.form');
    }

    public function add(Request $request){
        $movimento = new Movimento;
        $movimento = $movimento->create( $request->all() );
        return Redirect::to('/movimentos');
    }

    public function edit( $id ){
        $movimento = Movimento::findOrFail( $id );
        return view('movimentos.form', ['movimento' => $movimento]);
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
