@extends('layouts.estrutura')

@section('content')
<div class="container mx-auto p-6 max-w-xl">
    <h1 class="text-xl font-semibold mb-4">Detalhes da Turma</h1>

    <div class="bg-white p-6 rounded shadow">
        <p><strong>ID:</strong> {{ $turma->id }}</p>
        <p><strong>Número da Turma:</strong> {{ $turma->numero_turma }}</p>
        <p><strong>Semestre:</strong> {{ $turma->semestre }}</p>
        <p><strong>Período:</strong> {{ $turma->periodo }}</p>
    </div>

    <div class="mt-4">
        <a href="{{ route('turmas.index') }}" class="text-blue-600 hover:underline">← Voltar</a>
    </div>
</div>
@endsection
