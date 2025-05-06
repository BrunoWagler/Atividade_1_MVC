@extends('layouts.estrutura')

@section('content')
    <div class="container mx-auto p-6">

        {{-- Botão de Cadastrar Estudante --}}
        <div class="flex justify-end mb-4">
            <a href="{{ route('alunos.create') }}"
               class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                + Cadastrar Estudante
            </a>
        </div>

        {{-- Tabela de Estudantes --}}
        <table class="min-w-full table-auto bg-white border-collapse border border-gray-200 rounded-lg shadow-lg">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="px-6 py-3 text-left text-sm font-semibold">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">CPF</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Nome</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Data Nascimento</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($estudantes as $estudante)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $estudante->id }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $estudante->cpf }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $estudante->nome }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $estudante->data_nascimento }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">
                            <div class="flex space-x-2">
                                {{-- Detalhes (opcional) --}}
                                <a href="{{ route('alunos.show', $estudante->id) }}"
                                   class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Detalhes
                                </a>

                                {{-- Editar --}}
                                <a href="{{ route('alunos.edit', $estudante->id) }}"
                                   class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                    Alterar
                                </a>

                                {{-- Remover --}}
                                <form action="{{ route('alunos.destroy', $estudante->id) }}" method="POST"
                                      onsubmit="return confirm('Tem certeza que deseja remover este estudante?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                                        Remover
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">Nenhum estudante cadastrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
