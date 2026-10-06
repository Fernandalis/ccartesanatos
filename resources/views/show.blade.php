<x-base-layout>
    <section class="max-w-7xl mx-auto py-10 px-6 grid grid-cols-1 md:grid-cols-2 gap-10">
        
        <!-- Imagem do Produto -->
        <div class="flex justify-center">
            <img src="{{ asset($produto->imagem) }}" 
                 alt="{{ $produto->nome }}" 
                 class="w-full max-w-md rounded-lg shadow-lg">
        </div>

        <!-- Informações do Produto -->
        <div class="flex flex-col justify-center">
            <h1 class="text-3xl font-bold text-amber-950 mb-4">{{ $produto->nome }}</h1>
            <p class="text-2xl font-semibold text-amber-700 mb-6">
                R$ {{ number_format($produto->preco, 2, ',', '.') }}
            </p>

            <!-- Opções de cor -->
            @if($produto->cores)
                <div class="mb-6">
                    <h2 class="font-semibold mb-2">Cor</h2>
                    <div class="flex gap-3">
                        @foreach($produto->cores as $cor)
                            <button class="px-4 py-2 border rounded hover:bg-amber-100">
                                {{ $cor }}
                            </button>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Quantidade -->
            <div class="mb-6">
                <h2 class="font-semibold mb-2">Quantidade</h2>
                <div class="flex items-center gap-3">
                    <button class="px-3 py-1 bg-stone-200 rounded">-</button>
                    <span>1</span>
                    <button class="px-3 py-1 bg-stone-200 rounded">+</button>
                </div>
            </div>

            <!-- Botões de ação -->
            <div class="flex gap-4 mb-6">
                <button class="flex-1 bg-amber-500 text-white py-3 rounded hover:bg-amber-600">
                    Adicionar ao Carrinho
                </button>
                <button class="flex-1 bg-green-600 text-white py-3 rounded hover:bg-green-700">
                    Comprar
                </button>
            </div>

            <!-- Descrição -->
            <p class="text-stone-700 leading-relaxed">
                {{ $produto->descricao }}
            </p>
        </div>
    </section>
</x-base-layout>
