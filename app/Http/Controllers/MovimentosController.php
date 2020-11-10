<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimento;

class MovimentosController extends Controller
{
    public function index(){

        $movimentos = Movimento::get();
        return view('movimentos.list', ['movimentos' => $movimentos]);
    }
}
