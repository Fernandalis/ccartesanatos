<x-base-layout>
    <section class="max-w-7xl mx-auto py-10 px-6">
        <h1 class="text-3xl font-bold text-amber-950 mb-6">
            Categoria: {{ $categoria->nome }}
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach($produtos as $produto)
                <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    <a href="{{ route('produtos.show', $produto->id) }}">
                        <img src="{{ asset($produto->imagem) }}" alt="{{ $produto->nome }}" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-bold text-amber-950">{{ $produto->nome }}</h2>
                            <p class="text-xl font-semibold text-amber-700">
                                R$ {{ number_format($produto->preco, 2, ',', '.') }}
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
</x-base-layout>

