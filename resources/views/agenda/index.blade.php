@extends('layout')

@section('cabecalho')
    Agenda
@endsection
@section('conteudo')
    @include('mensagem')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($agenda as $dado)
                <tr>
                    <th>{{ $dado->id }}</th>
                    <td>{{ $dado->nome }}</td>
                    <td>{{ $dado->telefone }}</td>
                    <td>
                        <a href="{{ route('agenda.edit', $dado) }}" class="btn btn-primary"><i class="fas fa-check"></i></a>
                        <form action="{{ route('agenda.destroy', $dado) }}" method="post" style="display: inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja apagar?')">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <th></th>
                    <th>Nenhum registro foi encontrado</th>
                    <th></th>
                </tr>
            @endforelse
    </table>

    <a href="{{ route('agenda.criar') }}" class="btn btn-success col-2" role="button">Novo</a>

@endsection
