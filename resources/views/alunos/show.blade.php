@extends('layouts.estrutura')

@section('content')
    <div class="container mx-auto p-6 max-w-2xl bg-white rounded shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Detalhes do Estudante</h2>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-600">ID:</label>
            <p class="text-gray-900">{{ $estudante->id }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-600">CPF:</label>
            <p class="text-gray-900">{{ $estudante->cpf }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-600">Nome:</label>
            <p class="text-gray-900">{{ $estudante->nome }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-600">Data de Nascimento:</label>
            <p class="text-gray-900">{{ \Carbon\Carbon::parse($estudante->data_nascimento)->format('d/m/Y') }}</p>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-600">Turmal:</label>
            <p class="text-gray-900">
                Turma {{ $estudante->turmal->numero_turma }} - {{ $estudante->turmal->periodo }}
            </p>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('alunos.estudantes') }}"
               class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">
                Voltar
            </a>

            <a href="{{ route('estudantes.edit', $estudante->id) }}"
               class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                Editar
            </a>
        </div>
    </div>
@endsection
