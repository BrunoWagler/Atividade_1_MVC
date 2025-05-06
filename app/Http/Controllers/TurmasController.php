<?php

namespace App\Http\Controllers;

use App\Models\TurmasModel;
use Illuminate\Http\Request;

class TurmasController extends Controller
{
    public function index()
    {
        $turmas = TurmasModel::all();
        return view('turmas.index', compact('turmas'));
    }

    public function create()
    {
        return view('turmas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero_turma' => 'required|integer',
            'semestre' => 'required|integer',
            'periodo' => 'required|string|max:255',
        ]);

        TurmasModel::create($request->all());

        return redirect()->route('turmas.turmas')->with('success', 'Turma criada com sucesso!');
    }

    public function show($id)
    {
        $turma = TurmasModel::findOrFail($id);
        return view('turmas.show', compact('turma'));
    }

    public function edit($id)
    {
        $turma = TurmasModel::findOrFail($id);
        return view('turmas.edit', compact('turma'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'numero_turma' => 'required|integer',
            'semestre' => 'required|integer',
            'periodo' => 'required|string|max:255',
        ]);

        $turma = TurmasModel::findOrFail($id);
        $turma->update($request->all());

        return redirect()->route('turmas.turmas')->with('success', 'Turma atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $turma = TurmasModel::findOrFail($id);
        $turma->delete();

        return redirect()->route('turmas.turmas')->with('success', 'Turma removida com sucesso!');
    }
}
?>