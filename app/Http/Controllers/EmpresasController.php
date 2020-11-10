<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresasController extends Controller
{
    public function index(){

        $empresas = Empresa::get();
        return view('empresas.list', ['empresas' => $empresas]);
    }
}
