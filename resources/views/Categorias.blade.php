<x-base-layout>
    <section class="max-w-7xl mx-auto py-10 px-6">
        <h1 class="text-3xl font-bold text-amber-950 mb-6">Categorias</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach($categorias as $categoria)
                <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition p-6 flex items-center gap-4">
                    
                    <!-- Imagem maior ao lado -->
                    @if($categoria->ilustracao)
                        <img src="{{ asset($categoria->ilustracao) }}" 
                             alt="{{ $categoria->nome }}" 
                             class="w-32 h-32 object-cover rounded-md">
                    @else
                        <div class="w-32 h-32 bg-amber-200 rounded-full flex items-center justify-center">
                            <span class="text-4xl">📦</span>
                        </div>
                    @endif

                    <!-- Nome e descrição alinhados à direita da imagem -->
                    <div class="flex-1 text-center">
                        <h2 class="text-xl font-bold text-amber-800">{{ $categoria->nome }}</h2>
                        <p class="text-sm text-stone-600 mb-2">{{ $categoria->descricao }}</p>

                        <a href="{{ route('categorias.cshow', $categoria->id) }}" 
                        class="mt-3 inline-block bg-amber-950 text-white px-4 py-2 rounded hover:bg-amber-800">
                         Ver Produtos
                        </a>

                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-base-layout>
