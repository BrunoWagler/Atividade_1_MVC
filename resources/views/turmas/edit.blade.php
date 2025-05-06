@extends('layouts.estrutura')

@section('content')
<div class="container mx-auto p-6 max-w-xl">
    <h1 class="text-xl font-semibold mb-4">Editar Turma</h1>

    <form action="{{ route('turmas.update', $turma->id) }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div>
            <label for="numero_turma" class="block text-sm font-medium">Número da Turma</label>
            <input type="number" name="numero_turma" id="numero_turma" value="{{ $turma->numero_turma }}" class="w-full mt-1 p-2 border rounded" required>
        </div>

        <div>
            <label for="semestre" class="block text-sm font-medium">Semestre</label>
            <input type="number" name="semestre" id="semestre" value="{{ $turma->semestre }}" class="w-full mt-1 p-2 border rounded" required>
        </div>

        <div>
            <label for="periodo" class="block text-sm font-medium">Período</label>
            <input type="text" name="periodo" id="periodo" value="{{ $turma->periodo }}" class="w-full mt-1 p-2 border rounded" required>
        </div>

        <button type="submit" class="px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">
            Atualizar
        </button>
    </form>
</div>
@endsection
