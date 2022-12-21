@extends('layouts.app')

@section('content')

    <body>
        <main
            class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <form action="{{ route('update') }}" id="edita-aluno"
                class="text-white d-flex flex-column justify-content-between ">
                <div class="form-group mb-4">
                    <label for="name-input">Nome:</label>
                    <input class="form-control" form="edita-aluno" id="name_input" name="name_input" type="text"
                        placeholder="Digite o nome do aluno" value="{{ $name ?? '' }}">
                </div>

                <div class="form-group mb-4">
                    <label for="matricula-input">Matricula:</label>
                    <input class="form-control" form="edita-aluno" id="matricula_input" name="matricula_input"
                        type="text" placeholder="Digite o numero de matricula" value="{{ $matricula ?? '' }}">
                </div>
                <input type="submit" value="salvar" class="btn btn-primary" form="edita-aluno" />
            </form>
        </main>
    </body>
@endsection
