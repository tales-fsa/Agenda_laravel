@extends('layout')

@section('cabecalho')
    Agenda
@endsection
@section('conteudo')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($agenda as $dado)
                <tr>
                    <th>{{ $dado->id }}</th>
                    <td>{{ $dado->nome }}</td>
                    <td>{{ $dado->telefone }}</td>
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
