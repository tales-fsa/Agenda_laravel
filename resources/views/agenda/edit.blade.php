@extends('layout')

@section('cabecalho')
  Editar
@endsection

@section('conteudo')
    <form action="{{ route('agenda.update', $agenda) }}" method="post">
            @method('PUT')
            @include('agenda._form')
    </form>
@endsection
