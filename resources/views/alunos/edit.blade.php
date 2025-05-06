@extends('layouts.estrutura')

@section('content')
    <div class="container mx-auto p-6 max-w-2xl bg-white rounded shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Editar Estudante</h2>

        {{-- Exibição de erros --}}

        <form action="{{ route('alunos.update', $estudante->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- Método PUT para edição --}}

            {{-- CPF --}}
            <div class="mb-4">
                <label for="cpf" class="block text-sm font-medium text-gray-700">CPF</label>
                <input type="text" name="cpf" id="cpf" value="{{ old('cpf', $estudante->cpf) }}"
                       class="mt-1 block w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            {{-- Nome --}}
            <div class="mb-4">
                <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $estudante->nome) }}"
                       class="mt-1 block w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            {{-- Data de Nascimento --}}
            <div class="mb-4">
                <label for="data_nascimento" class="block text-sm font-medium text-gray-700">Data de Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="{{ old('data_nascimento', $estudante->data_nascimento) }}"
                       class="mt-1 block w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            {{-- Botões --}}
            <div class="flex justify-between">
                <a href="{{ route('alunos.index') }}"
                   class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">
                    Voltar
                </a>

                <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Atualizar
                </button>
            </div>
        </form>
    </div>
@endsection
