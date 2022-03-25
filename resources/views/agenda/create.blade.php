<!DOCTYPE html>
@extends('layout')

@section('cabecalho')
  Adicionar
@endsection

@section('conteudo')
<form action="{{ route('agenda.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col col-8 ">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="col col-4">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" name="telefone" id="telefone">
        </div>
    </div>
    <button class="btn btn-primary mt-4">Adicionar</button>
</form>
@endsection
