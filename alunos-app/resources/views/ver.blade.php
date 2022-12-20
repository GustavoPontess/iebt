@extends('layouts.app')

@section('content')

    <body class="antialiased bg-gray-100 dark:bg-gray-900">
        <div class="relative flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0">
            <div class="w-50">
                <div class="text-white text-center mb-5">
                    <h1>Visualizar alunos cadastrados</h1>
                </div>
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Matricula</th>
                            <th scope="col" class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($results2))
                            <?php $cont = 0 ?>
                            {{-- este foreache so ira funcionar quando usado com o metodo ver que esta comentado
                                pois retorna um vetor de nome de alunos --}}
                            @foreach ($results2 as $aluno)
                                <tr>
                                    <th scope="row">{{$cont++}}</th>
                                    <td>{{ $aluno->name }}</td>
                                    <td>{{ $aluno->matricula }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('/editar/'. $aluno->matricula.'/'.$aluno->name) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{ url('/apagar/'. $aluno->matricula)}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @for ($i = 0; $i < sizeof($results); $i++)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$results[$i]->name}}</td>
                                <td>{{$results[$i]->matricula}}</td>
                                <td class="text-center">
                                    <a href="{{ url('/editar/'. $results[$i]->matricula) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="{{ url('/apagar/'. $results[$i]->matricula)}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            @endfor --}}
                        @else
                            <tr>
                                <th scope="row" colspan="4" class="text-center text-danger">Nenhum aluno cadastrado</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </body>
@endsection
