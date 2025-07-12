@extends('layouts.app')

@section('title', 'Cadastrar Produto')

@section('content')
  <div class="max-w-xl mx-auto bg-[#1a1a25] p-6 rounded-xl shadow border border-gray-700">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-semibold text-purple-400">Novo Produto</h2>
      <a href="{{ route('produtos.index') }}"
         class="text-sm text-purple-300 hover:text-purple-100 transition underline">
         ← Voltar
      </a>
    </div>

    <form action="{{ route('produtos.store') }}" method="POST" class="space-y-4">
      @csrf
      <div>
        <label class="block text-sm text-gray-300">Nome:</label>
        <input type="text" name="nome" class="w-full px-4 py-2 rounded bg-[#0f0f13] border border-gray-600 text-white focus:ring focus:ring-purple-600" required>
      </div>

      <div>
        <label class="block text-sm text-gray-300">Preço:</label>
        <input type="number" step="0.01" name="preco" class="w-full px-4 py-2 rounded bg-[#0f0f13] border border-gray-600 text-white focus:ring focus:ring-purple-600" required>
      </div>

      <div>
        <label class="block text-sm text-gray-300">Estoque:</label>
        <input type="number" name="estoque" class="w-full px-4 py-2 rounded bg-[#0f0f13] border border-gray-600 text-white focus:ring focus:ring-purple-600" required>
      </div>

      <div>
        <label class="block text-sm text-gray-300">Categoria:</label>
        <select name="categoria_id" class="w-full px-4 py-2 rounded bg-[#0f0f13] border border-gray-600 text-white focus:ring focus:ring-purple-600" required>
          <option value="">Selecione uma categoria</option>
          @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
          @endforeach
        </select>
      </div>

      <button type="submit"
              class="bg-purple-600 hover:bg-purple-500 text-white px-6 py-2 rounded-md transition shadow-md">
        Salvar
      </button>
    </form>
  </div>
@endsection
