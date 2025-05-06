<?php

namespace App\Http\Controllers;

use App\Models\TurmasModel;
use Illuminate\Http\Request;

class TurmasController extends Controller
{
    public function index()
    {
        $turmas = TurmasModel::all();
        return view('turmas.turmas', compact('turmas'));
    }

    public function create()
    {
        return view('turmas.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'numero_turma' => 'required|integer',
            'semestre' => 'required|integer',
            'periodo' => 'required|string|max:255',
        ]);

        try {
            // Criação de uma nova turma com dados validados
            TurmasModel::create($validated);

            // Redireciona com mensagem de sucesso
            return redirect()->route('turmas.index')->with('success', 'Turma criada com sucesso!');
        } catch (\Exception $e) {
            // Em caso de erro, captura a exceção e exibe uma mensagem de erro
            return redirect()->route('turmas.create')->with('error', 'Erro ao criar a turma: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        // Encontrando a turma pelo ID ou mostrando um erro se não encontrado
        $turma = TurmasModel::findOrFail($id);
        return view('turmas.show', compact('turma'));
    }

    public function edit($id)
    {
        // Encontrando a turma pelo ID ou mostrando um erro se não encontrado
        $turma = TurmasModel::findOrFail($id);
        return view('turmas.edit', compact('turma'));
    }

    public function update(Request $request, $id)
    {
        // Validação dos dados antes de atualizar
        $request->validate([
            'numero_turma' => 'required|integer',
            'semestre' => 'required|integer',
            'periodo' => 'required|string|max:255',
        ]);

        // Encontrando a turma pelo ID
        $turma = TurmasModel::findOrFail($id);

        // Atualizando a turma com os dados validados
        $turma->update($request->only(['numero_turma', 'semestre', 'periodo']));

        // Redirecionando com mensagem de sucesso
        return redirect()->route('turmas.index')->with('success', 'Turma atualizada com sucesso!');
    }

    public function destroy($id)
    {
        // Encontrando a turma pelo ID
        $turma = TurmasModel::findOrFail($id);

        // Removendo a turma
        $turma->delete();

        // Redirecionando com mensagem de sucesso
        return redirect()->route('turmas.index')->with('success', 'Turma removida com sucesso!');
    }
}
