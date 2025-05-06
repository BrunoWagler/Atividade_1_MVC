<?php

namespace App\Http\Controllers;

use App\Models\EstudantesModel;
use Illuminate\Http\Request;

class EstudantesController extends Controller
{
    public function index()
    {
        $estudantes = EstudantesModel::all();
        return view('alunos.estudantes', compact('estudantes'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cpf' => 'required|unique:estudantes_models',
            'nome' => 'required|max:255',
            'data_nascimento' => 'required|date',
        ]);

        EstudantesModel::create($request->all());

        return redirect()->route('estudantes.index')->with('success', 'Estudante criado com sucesso!');
    }

    public function show(EstudantesModel $estudantesModel)
    {
        return view('alunos.show', compact('estudantesModel'));
    }

    public function edit(EstudantesModel $estudantesModel)
    {
        return view('alunos.edit', compact('estudantesModel'));
    }

    public function update(Request $request, EstudantesModel $estudantesModel)
    {
        $request->validate([
            'cpf' => 'required|unique:estudantes_models,cpf,' . $estudantesModel->id,
            'nome' => 'required|max:255',
            'data_nascimento' => 'required|date',
        ]);

        $estudantesModel->update($request->all());

        return redirect()->route('estudantes.index')->with('success', 'Estudante atualizado com sucesso!');
    }

    public function destroy(EstudantesModel $estudantesModel)
    {
        $estudantesModel->delete();

        return redirect()->route('alunos.estudantes')->with('success', 'Estudante deletado com sucesso!');
    }
}

?>