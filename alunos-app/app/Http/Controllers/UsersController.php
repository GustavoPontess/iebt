<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Aluno;

class UsersController extends Controller
{
    /**
     *  Eloquente
     */
    /**
     * Display a listing of the resource.
     * Exibir uma listagem do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $results = Aluno::withTrashed()->get(); //mapeamento obijeto relaciona ORM
        
        return view('ver', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     * Mostre o formulário para criar um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('incluir');
    }

    /**
     * Store a newly created resource in storage.
     * Armazene um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $aluno = new Aluno; // Ao instaciar a model de alunos temos acesso a cada propriedade ou coluna da nossa tabela
        $aluno->name = $request["name_input"]; // Desta forma obtemos a propriedade e atribuimos um valor a ela
        $aluno->matricula = $request["matricula_input"];
        $aluno->save(); // entao chamamos o metodo save
        return view('incluir', [ "mensagem" => "Aluno: {$request["name_input"]}, salvo com sucesso!" ]);
    }

    /**
     * Display the specified resource.
     * Exiba o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {

    }

    /**
     * Show the form for edit resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit()
    {
        //
        return view('editar', [
            "matricula" => "",
            "name" => ""
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * Mostra o formulário para editar o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editSpecific(int $matricula, string $name)
    {
        //
        return view('editar', [
            "matricula" => "$matricula",
            "name" => "$name"
        ]);
    }

    /**
     * Update the specified resource in storage.
     * Atualize o recurso especificado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $matricula = $request["matricula_input"];
        $aluno = Aluno::where('matricula', $matricula)->first();
        $aluno->name = $request["name_input"];
        $aluno->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     * Remova o recurso especificado do armazenamento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $matricula)
    {
        //
        // $aluno = Aluno::where('matricula', $matricula);
        // $aluno->delete();
        Aluno::where('matricula', $matricula)->delete();
        return back();
    }
}
