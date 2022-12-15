<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function incluir()
    {
        return view("incluir");
    }
    public function editar()
    {
        return view("editar");
    }
    public function apagar()
    {
        return view("ver");
    }
    public function ver()
    {
        return view("ver");
    }
    public function salvar(Request $request){
        return view('incluir', [
            "mensagem" => "Salvo com sucesso"
        ]);
    }
}
