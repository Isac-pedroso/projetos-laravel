<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    // Criando função de controller
    public function index(){
        $produtos = \App\Models\Produto::all();
        return dd($produtos);
    }

    // Criando função com parametros
    public function show($id = ""){
        return "Show: ".$id;
    }
}
