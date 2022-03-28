@csrf
    <div class="row">
        <div class="col col-8 ">
            <label for="nome">Nome</label>
            <input value="{{ old('nome', $agenda->nome ?? '') }}" type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="col col-4">
            <label for="telefone">Telefone</label>
            <input value="{{ old('telefone', $agenda->telefone ?? '') }}" type="tel" class="form-control" name="telefone" id="telefone">
        </div>
    </div>
    <button class="btn btn-primary mt-4">Salvar</button>
