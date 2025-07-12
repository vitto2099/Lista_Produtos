@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('content')
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold text-white">Estoque Atual</h2>
    <a href="{{ route('produtos.create') }}"
       class="bg-purple-600 hover:bg-purple-500 text-white px-4 py-2 rounded-lg shadow transition duration-200">
       <i class="fas fa-plus mr-1"></i> Adicionar Produto
    </a>
  </div>

  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($produtos as $produto)
      <div class="bg-[#1a1a25] rounded-xl p-5 border border-gray-700 hover:border-purple-500 transition duration-200 shadow-md hover:shadow-purple-600/20">
        <h3 class="text-xl font-semibold text-purple-400 mb-1">{{ $produto->nome }}</h3>
        <p class="text-sm text-gray-300">Preço: <span class="text-green-400">R$ {{ number_format($produto->preco, 2, ',', '.') }}</span></p>
        <p class="text-sm text-gray-400">Estoque: {{ $produto->estoque }}</p>
        <p class="text-sm text-gray-500">Categoria ID: {{ $produto->categoria_id }}</p>

        <div class="mt-4 flex gap-2">
          <a href="{{ route('produtos.edit', $produto->id) }}"
             class="flex-1 bg-purple-700 hover:bg-purple-600 text-white font-medium px-4 py-2 rounded-lg text-center transition duration-200">
            <i class="fas fa-edit mr-1"></i> Editar
          </a>

          <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="flex-1">
            @csrf
            @method('DELETE')
            <button type="submit"
              class="w-full bg-gray-800 hover:bg-gray-700 text-gray-100 font-medium px-4 py-2 rounded-lg transition duration-200">
              <i class="fas fa-trash mr-1 text-purple-400"></i> Remover
            </button>
          </form>
        </div>
      </div>
    @endforeach
  </div>

  @if(count($produtos) === 0)
    <div class="text-center py-12 text-gray-400">
      <p class="text-purple-400 font-semibold text-lg">Nenhum produto encontrado.</p>
      <p class="text-sm mt-2">Clique em <span class="text-purple-300 font-medium">"Adicionar Produto"</span> para criar o primeiro item no sistema.</p>
    </div>
  @endif
@endsection
