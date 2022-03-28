@extends('layout')

@section('cabecalho')
  Adicionar
@endsection

@section('conteudo')
    <form action="{{ route('agenda.store') }}" method="post">
         @include('agenda._form')
    </form>
@endsection
