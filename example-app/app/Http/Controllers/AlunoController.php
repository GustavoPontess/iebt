<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function incluir():View
    {
        return view("incluir");
    }

    public function editar(int $id):View
    {
        $student = Student::findOrFail($id);

        return view("editar", ['id' => $student->id, 'name' => $student->name, 'matricula' => $student->matricula]);
    }

    public function apagar(int $id):\Illuminate\Http\RedirectResponse
    {
        Student::where('id', $id)->delete();

        return back();
    }

    public function ver():View
    {
        $students = Student::all();


        return view("ver", ['students' => $students]);
    }

    public function salvar(Request $request):\Illuminate\Http\RedirectResponse
    {
        $data = $request->query();

        $student = new Student;

        $student->name = $data["name-input"];
        $student->matricula = $data["matricula-input"];

        $student->save();

        return back();
    }

    public function alterar(Request $request):\Illuminate\Http\RedirectResponse
    {
        $data = $request->query();

        Student::where('id', $data['id-input'])->update(['name' => $data["name-input"], 'matricula' => $data["matricula-input"]]);

        return back();
    }
}
