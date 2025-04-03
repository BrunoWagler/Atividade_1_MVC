@extends('layouts.estrutura')

@section('content')

<div class="max-w-lg w-full mx-auto p-6 bg-white rounded-lg shadow-lg">
    <div class="text-center">
        <h1 class="text-4xl font-semibold text-gray-700 mb-4">Bem-vindo!</h1>
    </div>
    
    <div class="flex flex-wrap gap-4 justify-center">
        <a href="{{ route('alunos.estudantes') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300 w-full sm:w-auto text-center mb-4">
            Mostrar Alunos
        </a>
        
        <a href="{{ route('turmas.turmas') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300 w-full sm:w-auto text-center mb-4">
            Mostrar Classes
        </a>
    </div>
</div>

@endsection