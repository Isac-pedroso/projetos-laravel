<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    // Criando função de controller
    public function index(){
        // $produtos = \App\Models\Produto::all();
        // return dd($produtos);
        $nome = 'Isacao';
        $idade = 20;
        $html = "<h1>Olá eu sou h1</h1>";
        
        //return view('site.empresa', ['nome'=>$nome, 'idade'=>$idade, 'html'=>$html]);
        return view('site.home', compact('nome', 'idade', 'html'));
    }

    // Criando função com parametros
    public function show($id = ""){
            if
        // return "Show: ".$id;
    }
}
