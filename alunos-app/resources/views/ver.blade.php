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
                            <th scope="col">Criado</th>
                            <th scope="col">Atualizado</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($results))
                            @foreach ($results as $aluno)
                                <tr>
                                    <th scope="row">{{$aluno->id}}</th>
                                    <td>{{ $aluno->name }}</td>
                                    <td>{{ $aluno->matricula }}</td>
                                    <td>{{ $aluno->created_at}}</td>
                                    <td>{{ $aluno->updated_at}}</td>
                                    @if ($aluno->deleted_at == null)
                                    <td>Ativo</td>
                                    <td class="text-center">
                                        <a href="{{ url('/editSpecific/'. $aluno->matricula.'/'.$aluno->name) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Alterar</a>
                                        <a href="{{ url('/destroy/'. $aluno->matricula)}}" class="btn btn-danger"><i class="bi bi-x-lg"></i> Desativar</a>
                                    </td>
                                    @else
                                    <td>Inativo</td>
                                    <td class="text-center">
                                        <a href="{{ url('#')}}" class="btn btn-success"><i class="bi bi-check2"></i> Ativar</a>
                                        <a href="{{ url('#')}}" class="btn btn-danger"><i class="bi bi-trash"></i> Deletar</a>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
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
