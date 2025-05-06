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
            'cpf' => 'required|unique:estudantes',
            'nome' => 'required|max:255',
            'data_nascimento' => 'required|date',
        ]);
    
        EstudantesModel::create($request->all());
    
        return redirect()->route('estudantes.index')->with('success', 'Estudante criado com sucesso!');
    }
    

    public function show($id)
    {
        $estudante = EstudantesModel::findOrFail($id);
    
       
        return view('alunos.show', compact('estudante'));
    }
    
    public function edit($id)
    {
        // Encontra o estudante pelo ID
        $estudante = EstudantesModel::find($id);
    
        if (!$estudante) {
            // Caso o estudante não seja encontrado, redireciona com mensagem de erro
            return redirect()->route('alunos.index')->with('error', 'Estudante não encontrado.');
        }
    
        // Exibe a view de edição passando os dados do estudante
        return view('alunos.edit', compact('estudante'));
    }
    
    public function update(Request $request, $id)
    {
        // Validação dos dados do formulário de edição
        $request->validate([
            'cpf' => 'required|unique:estudantes,cpf,' . $id,  // Exclui o próprio CPF do estudante da validação
            'nome' => 'required|max:255',
            'data_nascimento' => 'required|date',
        ]);
    
        // Encontra o estudante pelo ID
        $estudante = EstudantesModel::find($id);
    
        if (!$estudante) {
            return redirect()->route('alunos.index')->with('error', 'Estudante não encontrado.');
        }
    
        // Atualiza os dados do estudante
        $estudante->update($request->all());
    
        // Redireciona para a lista de estudantes com uma mensagem de sucesso
        return redirect()->route('alunos.index')->with('success', 'Estudante atualizado com sucesso!');
    }
    
    public function destroy($id)
    {
        $estudante = EstudantesModel::find($id); // Localiza o estudante pelo ID
    
        if ($estudante) {
            $estudante->delete(); // Exclui o estudante
            return redirect()->route('alunos.index')->with('success', 'Estudante excluído com sucesso!');
        } else {
            return redirect()->route('alunos.index')->with('error', 'Estudante não encontrado.');
        }
    }
    
    
}

?>