<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Redirect;
use App\Models\Movimento;


class RelatoriosController extends Controller
{
    public function index(){

        $movimentos = Movimento::get();

        $cliente = Movimento::max('valor');
        
        $fornecedor = Movimento::min('valor');

        return view('relatorios.list', [
            'movimentos' => $movimentos,
            'cliente' => $cliente,
            'fornecedor' => $fornecedor
        ]);
    }
}
