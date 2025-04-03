@extends('layouts.estrutura')

@section('content')
    <div class="container mx-auto p-6">
        <table class="min-w-full table-auto bg-white border-collapse border border-gray-200 rounded-lg shadow-lg">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="px-6 py-3 text-left text-sm font-semibold">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Número da Turma</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Semestre</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Período</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($turmas as $turma)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $turma->id }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $turma->numero_turma }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $turma->semestre }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $turma->periodo }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">
                    
                            <div class="flex space-x-2">
                          
                                <a href="" 
                                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Detalhes
                                </a>

                              
                                <a href="" 
                                    class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                    Alterar
                                </a>

                                <form action="" method="POST">
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
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
