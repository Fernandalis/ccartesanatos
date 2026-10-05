<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C & C Artesanatos - Loja Online</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-amber-50 text-stone-700 min-h-screen flex flex-col">

    <!-- Cabeçalho -->
    <header class="bg-white shadow p-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-amber-950 ">C & C Artesanatos</h1>
        <nav class="flex space-x-6">
            <a href="/" class="hover:text-amber-400 ">Início</a>
            <a href="#categorias" class="hover:text-amber-400">Categorias</a>
            <a href="#produtos" class="hover:text-amber-400">Produtos</a>
            <a href="#contato" class="hover:text-amber-400 flex items-center gap-2">Contato 
            </a>

            <a href="#carrinho" class="hover:text-amber-400 flex items-center gap-2"> 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" /></svg>
            </a>

            <a href="#carrinho" class="hover:text-amber-400 flex items-center gap-2"> 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
            </a>
        </nav>
    </header>

    <!-- Banner -->
    <section class="bg-gradient-to-r from-amber-100 to-rose-100 py-16 text-center">
        <h2 class="text-4xl font-bold text-amber-950 mb-4 inline-block px-2 rounded">Peças únicas feitas à mão</h2>
        <p class="text-stone-600 mb-6">Amigurumis, bolsas e costura criativa para encantar sua rotina.</p>
        <a href="#produtos" class="bg-amber-950 hover:bg-rose-600 text-white px-6 py-3 rounded-lg shadow">
            Ver Coleção
        </a>
    </section>

    <!-- Categorias -->
    <section id="categorias" class="container mx-auto py-12">
        <h3 class="text-2xl font-bold text-amber-950 mb-6 text-center">Categorias em Destaque</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow p-6 text-center w-95 mx-auto hover:-translate-y-2 hover:scale-105 hover:shadow-lg">
                <a href="Amigurumis"> </a>
                <img class="mx-auto mb-4 rounded-xl w-70 h-70 object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQjV-d7SgJb1rOKYD7u8YZv7Ijs32OlylcGimmAwyQrw&s=10" alt="">
                <h4 class="text-xl font-semibold text-amber-950 mb-2 hover:text-stone-500">Amigurumis</h4>
                <p class="text-stone-500">Bichinhos fofos feitos em crochê.</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6 text-center w-95 mx-auto hover:-translate-y-2 hover:scale-105 hover:shadow-lg">
                <a href="Bolsas"></a>
                <img class="mx-auto mb-4 rounded-xl w-70 h-70 object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQraunGYcGTKmuPAuT21DZ6fumdoiOGu7OqbpSBjmiUxg&s=10" alt="">
                <h4 class="text-xl font-semibold text-amber-950 mb-2 hover:text-stone-500">Bolsas de Tecido</h4>
                <p class="text-stone-500">Ecobags e bolsas artesanais.</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6 text-center w-95 mx-auto hover:-translate-y-2 hover:scale-105 hover:shadow-lg">
                <a href="Acessórios"></a>
                <img class="mx-auto mb-4 rounded-xl w-70 h-70 object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2e8ZfxicI2kkMx1guWz09jqipabyll99OTRdYY-rCqA&s=10" alt="">
                <h4 class="text-xl font-semibold text-amber-950 mb-2 hover:text-stone-500">Acessórios</h4>
                <p class="text-stone-500">Ecobags e bolsas artesanais.</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6 text-center w-95 mx-auto hover:-translate-y-2 hover:scale-105 hover:shadow-lg">
                <a href="Decoração"></a>
                <img class="mx-auto mb-4 rounded-xl w-70 h-70 object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5QyRZ8wqWvt_j3s2ultxTZ_0u_3WSish12G7ZZg-zyI09EgGWNo84-AD2&s=10" alt="">
                <h4 class="text-xl font-semibold text-amber-950 mb-2 hover:text-stone-500">Decoração/Casa</h4>
                <p class="text-stone-500">Ecobags e bolsas artesanais.</p>
            </div>
        </div>
    </section>

    <!-- Produtos -->
    <section id="produtos" class="container mx-auto py-12 w-95 mx-auto">
        <h3 class="text-2xl font-bold text-amber-950 mb-6 text-center">Nossas Criações</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-amber-50 rounded-xl shadow p-4 border border-transparent hover:border-amber-900">
                <h4 class="font-semibold text-lg text-amber-950">Ursinho Amigurumi</h4>
                <div class=" flex justify-between pr-2">
                <p class="text-stone-500 text-sm">Feito em crochê com fio de algodão.</p>
                <button class="text-center rounded-xl w-23 h-8 bg-stone-500 text-white -mt-5"> <a href="#saiba mais" class="hover:text-stone-300"> Saiba mais </a> </button></div>
            </div>

            <div class="bg-amber-50 rounded-xl shadow p-4 border border-transparent hover:border-amber-900">
                <h4 class="font-semibold text-lg text-amber-950">Bolsa Totebag Floral</h4>
                <div class=" flex justify-between pr-2">
                <p class="text-stone-500 text-sm">Tecido tricoline, forrada.</p>
                <button class="text-center rounded-xl w-23 h-8 bg-stone-500 text-white -mt-5"> <a href="#saiba mais" class="hover:text-stone-300"> Saiba mais </a> </button></div>
            
            </div>
            <div class="bg-amber-50 rounded-xl shadow p-4 border border-transparent hover:border-amber-900">
                <h4 class="font-semibold text-lg text-amber-950">Kit Necessaire Dupla</h4>
                <div class=" flex justify-between pr-2">
                <p class="text-stone-500 text-sm">Impermeável por dentro, 2 peças.</p>
                <button class="text-center rounded-xl w-23 h-8 bg-stone-500 text-white -mt-5"> <a href="#saiba mais" class="hover:text-stone-300"> Saiba mais </a> </button></div>
            </div>
            <div class="bg-amber-50 rounded-xl shadow p-4 border border-transparent hover:border-amber-900">
                <h4 class="font-semibold text-lg text-amber-950">Items personalizados</h4>
                <div class=" flex justify-between pr-2">
                <p class="text-stone-500 text-sm">Transforme seus sonhos em realidade.</p>
                <button class="text-center rounded-xl w-23 h-8 bg-stone-500 text-white -mt-5"> <a href="#saiba mais" class="hover:text-stone-300"> Saiba mais </a> </button></div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-amber-950 text-white text-center py-6 mt-auto">
        <p>&copy; {{ date('Y') }} C & C Artesanatos. Todos os direitos reservados.</p>
    </footer>

</body>
</html>


