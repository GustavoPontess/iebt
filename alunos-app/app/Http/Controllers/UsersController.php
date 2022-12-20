<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Aluno;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
    }

    public function incluir()
    {
        return view('incluir');
    }

    // public function ver()
    // {
    //     $alunos = ['Gustavo', 'Bernardo', 'Carol1', 'Carol2', 'Carol3'];
    //     //$alunos = [];
    //     return view('ver', compact('alunos'));
    // }
    // public function apagar()
    // {
    //     return view('/ver');
    // }

    // /*
    // |----------------------------------------
    // | DATAbASE Row SQL Queries
    // | Não faremos isso de verdade em um ambiente de produção. Este é apenas um exemplo
    // |----------------------------------------
    // */

    // /**
    //  * Summary of salvar
    //  * @param Request $request
    //  * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    //  */
    // public function salvar(Request $request)
    // {
    //     // dd($request["name_input"]);
    //     // DB::insert('insert into alunos (name, matricula) values (?, ?)', [$request["name_input"], $request["matricula_input"]]);
    //     $name = $request["name_input"];
    //     $matricula = $request["matricula_input"];
    //     Aluno::insert();
    //     return view('incluir', [
    //         "mensagem" => "Aluno: {$request["name_input"]}, salvo com sucesso!"
    //     ]);
    // }

    // /**
    //  * Summary of ver
    //  * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    //  */
    // public function ver()
    // {
    //     // $results = DB::select('select * from alunos');
    //     $results2 = Aluno::all(); //mapeamento obijeto relaciona ORM
    //     //dd($results2);
    //     // dd(sizeof($results));
    //     return view('ver', compact('results2'));
    // }

    // /**
    //  * Summary of apagar
    //  * @param int $matricula
    //  * @return \Illuminate\Http\RedirectResponse
    //  */
    // public function apagar(int $matricula)
    // {
    //     DB::delete('delete from alunos where matricula = ?', [$matricula]);
    //     return back();
    // }

    /*
    |----------------------------------------
    | ELOQUENT
    |----------------------------------------
    */

    /**
     * Summary of salvar
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function salvar(Request $request)
    {
        $aluno = new Aluno;
        $aluno->name = $request["name_input"];
        $aluno->matricula = $request["matricula_input"];
        $aluno->save();
        return view('incluir', [
            "mensagem" => "Aluno: {$request["name_input"]}, salvo com sucesso!"
        ]);
    }

    /**
     * Summary of ver
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function ver()
    {
        // $results = DB::select('select * from alunos');
        $results2 = Aluno::all(); //mapeamento obijeto relaciona ORM
        //dd($results2);
        // dd(sizeof($results));
        return view('ver', compact('results2'));
    }

    /**
     * Summary of apagar
     * @param int $matricula
     * @return \Illuminate\Http\RedirectResponse
     */
    public function apagar(int $matricula)
    {
        $aluno = Aluno::where('matricula', $matricula);
        $aluno->delete();
        return back();
    }
    public function editar(int $matricula, string $name)
    {
        return view('editar', [
            "matricula" => "$matricula",
            "name" => "$name"
        ]);
    }

    public function alterar(Request $request)
    {

        $matricula = $request["matricula_input"];
        $aluno = Aluno::where('matricula', $matricula)->first();
        $aluno->name = $request["name_input"];
        $aluno->save();

        return back();
    }
}
