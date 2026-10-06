<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;

class CategoriaController extends Controller
{
    public function cshow($id)
    {
        $categoria = Categoria::findOrFail($id);

        // Busca apenas 5 produtos dessa categoria
        $produtos = Produto::where('categoria_id', $id)
                           ->take(5)
                           ->get();

        return view('cshow', compact('categoria', 'produtos'));
    }
}
