<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Get all students Page
     *
     * Page for viewing all registered students
     *
     * @return View
     */
    public function ver():View
    {
        $students = Student::all();

        return view("ver", ['students' => $students]);
    }

    /**
     * Include Page
     *
     * Register page where the students are registered
     *
     * @return View
     */
    public function incluir():View
    {
        return view("incluir");
    }

    /**
     * Save student information.
     *
     * Take student information (Include Page) to save on the database
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function salvar(Request $request):\Illuminate\Http\RedirectResponse
    {
        $data = $request->query();

        $student = new Student;

        $student->name = $data["name-input"];
        $student->matricula = $data["matricula-input"];

        $student->save();

        return back();
    }

    /**
     * Edit student information page.
     *
     * Get a student show their information and allow edition
     *
     * @param  int  $id
     * @return View
     */
    public function editar(int $id):View
    {
        $student = Student::findOrFail($id);

        return view("editar", ['id' => $student->id, 'name' => $student->name, 'matricula' => $student->matricula]);
    }

    /**
     * Update student information.
     *
     * Take de edited student information and update it on the database
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function alterar(Request $request):\Illuminate\Http\RedirectResponse
    {
        $data = $request->query();

        Student::where('id', $data['id-input'])->update(['name' => $data["name-input"], 'matricula' => $data["matricula-input"]]);

        return back();
    }

    /**
     * Delete student information.
     *
     * Get a specific student and delete ir from the database
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function apagar(int $id):\Illuminate\Http\RedirectResponse
    {
        Student::where('id', $id)->delete();

        return back();
    }

}
