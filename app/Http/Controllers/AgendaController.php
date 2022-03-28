<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Requests\AgendaRequest;

class AgendaController extends Controller
{
    /**
     * Listar os dados da tabela agenda.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agenda = Agenda::all();

        return view('agenda.index')->with('agenda', $agenda);
    }

    /**
     * Abrir pagina de criação.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
    }

    /**
     * Insersão de dados no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Agenda $agenda)
    {
        $agenda->create($request->all());

        return redirect()->route('agenda.index')->with('mensagem', 'Cadastro realizado com sucesso!');
    }

    /**
     * Mostra o formulário preenchido para alteração.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda, int $id)
    {
        $agenda = Agenda::FindOrFail($id);

        return view('agenda.edit')->with('agenda', $agenda);
    }

    /**
     * Atualiza um registro no banco de dados
     *
     * @param AgendaRequest $request
     * @param integer $id
     * @return void
     */
    public function update(AgendaRequest $request, int $id)
    {
        $agenda = Agenda::FindOrFail($id);

        $agenda->update([
            'nome' => $request->nome,
            'telefone' => $request->telefone
        ]);

        return redirect()->route('agenda.index')->with('mensagem', 'Cadastro editado com sucesso!');;
    }

    /**
     * Remove o registro do banco de dados.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $agenda = Agenda::FindOrFail($id);

        $agenda->delete();

        return redirect()->route('agenda.index')->with('mensagem', 'Cadastro deletado com sucesso!');
    }
}
