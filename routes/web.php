<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\models\Produto;
Use App\Models\Categoria;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Home');
});

Route::get('/produtos', function () {
    $produtos = Produto::all();
    return view('Produtos', compact('produtos'));
});

Route::get('/categorias', function () {
    $categorias = Categoria::all();
    return view('categorias', compact('categorias'));
});

Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');