<x-base-layout>
    <section class="max-w-7xl mx-auto py-10 px-6">
        <!-- Título -->
        <h1 class="text-3xl font-bold text-amber-950 mb-6">Todos os Produtos</h1>

        <!-- Filtros -->
        <div class="flex justify-between items-center mb-8">
            <div class="space-x-4">
                <button class="px-4 py-2 bg-amber-950 rounded hover:bg-amber-800 text-amber-100">Todos</button>
                <button class="px-4 py-2 bg-amber-950 rounded hover:bg-amber-800 text-amber-100">Bolsas</button>
                <button class="px-4 py-2 bg-amber-950 rounded hover:bg-amber-800 text-amber-100">Pochetes</button>
                <button class="px-4 py-2 bg-amber-950 rounded hover:bg-amber-800 text-amber-100">Crochê</button>
            </div>
            <div>
                <label for="ordenar" class="mr-2 font-semibold text-amber-950">Ordenar:</label>
                <select id="ordenar" class="border rounded px-3 py-2 border-amber-900">
                    <option class="text-amber-950">Recomendado</option>
                    <option class="text-amber-950">Menor preço</option>
                    <option class="text-amber-950">Maior preço</option>
                </select>
            </div>
        </div>

        <!-- Grid de Produtos -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach($produtos as $produto)
                <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    <!-- Imagem e nome viram link -->
                    <a href="{{ route('produtos.show', $produto->id) }}">
                        <img src="{{ asset($produto->imagem) }}" alt="{{ $produto->nome }}" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-bold text-amber-950">{{ $produto->nome }}</h2>
                            <p class="text-sm text-stone-600 mb-2">{{ $produto->descricao }}</p>
                            <p class="text-xl font-semibold text-amber-700">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                        </div>
                    </a>

                    <!-- Botão separado para carrinho -->
                    <div class="px-4 pb-4">
                        <button class="mt-3 w-full bg-amber-900 text-white py-2 rounded hover:bg-amber-800">
                            Adicionar ao Carrinho
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-base-layout>
