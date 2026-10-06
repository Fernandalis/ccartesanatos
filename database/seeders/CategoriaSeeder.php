<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nome' => 'Moda & Acessórios',
            'ilustracao' => 'img/Moac.jpeg',
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Decoração & Lar',
            'ilustracao' => 'img/declar.png',
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Mundo Amigurumi',
            'ilustracao' => 'img/Amigur.jpeg',
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Organização & Utilidades',
            'ilustracao' => 'img/Orgutil.png',
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Personalizados',
            'ilustracao' => 'img/Amigulogo.png',
        ]);
    }
}
