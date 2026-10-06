<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Categoria 1: Moda & Acessórios
        DB::table('produtos')->insert([
            'nome' => 'Bolsa de Praia em Tecido Estampado',
            'descricao' => 'Bolsa espaçosa de tecido resistente, perfeita para praia ou dia a dia, com alças reforçadas e estampa exclusiva.',
            'imagem' => 'img/prod1.jpeg',
            'preco' => 85.00,
            'categoria_id' => 1,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Bolsa de Crochê Trama Aberta',
            'descricao' => 'Bolsa artesanal em crochê, leve e versátil, ideal para compor looks casuais e de verão.',
            'imagem' => 'img/prod2.jpeg',
            'preco' => 72.00,
            'categoria_id' => 1,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Estojo de Tecido Duplo (Dois Zíperes)',
            'descricao' => 'Nécessaire/estojo em tecido estruturado com duas divisórias independentes para organizar maquiagens ou materiais.',
            'imagem' => 'img/prod3.png',
            'preco' => 38.00,
            'categoria_id' => 1,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Estojo Slim Minimalista (Um Zíper)',
            'descricao' => 'Estojo prático e compacto em tecido, ideal para carregar o essencial com estilo e leveza.',
            'imagem' => 'img/prod4.jpeg',
            'preco' => 25.00,
            'categoria_id' => 1,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Chaveiro de Crochê Amigurumi',
            'descricao' => 'Charmoso chaveiro feito à mão em técnica amigurumi, perfeito para personalizar bolsas, mochilas e chaves.',
            'imagem' => 'img/prod5.jpeg',
            'preco' => 22.00,
            'categoria_id' => 1,
        ]);

        // Categoria 2: Decoração & Lar
        DB::table('produtos')->insert([
            'nome' => 'Tapete de Tapeçaria Artesanal',
            'descricao' => 'Tapete feito à mão com tramas encorpadas e acabamento impecável, trazendo aconchego para salas ou quartos.',
            'imagem' => 'img/prod6.jpeg',
            'preco' => 155.00,
            'categoria_id' => 2,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Painel de Tapeçaria de Parede',
            'descricao' => 'Peça decorativa de parede em tapeçaria, ideal para compor ambientes modernos e acolhedores.',
            'imagem' => 'img/prod7.jpeg',
            'preco' => 89.00,
            'categoria_id' => 2,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Caminho de Mesa em Crochê',
            'descricao' => 'Peça clássica em fio de qualidade, desenhada para destacar e harmonizar a mesa de jantar ou aparadores.',
            'imagem' => 'img/prod8.jpeg',
            'preco' => 75.00,
            'categoria_id' => 2,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Manta/Capa de Almofada em Crochê',
            'descricao' => 'Capa para almofada artesanal que adiciona textura e elegância ao sofá ou à cama.',
            'imagem' => 'img/prod9.jpeg',
            'preco' => 98.00,
            'categoria_id' => 2,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Conjunto de Sousplat em Crochê (4 unidades)',
            'descricao' => 'Jogo americano redondo feito à mão para enriquecer a mesa posta em refeições especiais.',
            'imagem' => 'img/prod10.jpeg',
            'preco' => 85.00,
            'categoria_id' => 2,
        ]);

        // Categoria 3: Mundo Amigurumi
        DB::table('produtos')->insert([
            'nome' => 'Bichinho Amigurumi Clássico',
            'descricao' => 'Pelúcia artesanal em crochê com fio macio e olhos com trava de segurança, perfeita para presentear.',
            'imagem' => 'img/prod11.jpeg',
            'preco' => 55.00,
            'categoria_id' => 3,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Personagem Temático em Amigurumi',
            'descricao' => 'Peça colecionável e decorativa em crochê, feita com detalhes ricos e acabamento artesanal.',
            'imagem' => 'img/prod12.jpeg',
            'preco' => 68.00,
            'categoria_id' => 3,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Móbile Infantil em Amigurumi',
            'descricao' => 'Estrutura leve com figuras em crochê, ideal para decorar o berço e encantar o quarto do bebê.',
            'imagem' => 'img/prod13.jpeg',
            'preco' => 115.00,
            'categoria_id' => 3,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Mini Amigurumi Colecionável',
            'descricao' => 'Pequena escultura de crochê com acabamento delicado, ideal para nichos e prateleiras.',
            'imagem' => 'img/prod14.jpeg',
            'preco' => 32.00,
            'categoria_id' => 3,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Chaveiro amigurumi',
            'descricao' => 'Bichinhos fofos de crochê, ideal para lembrancinhas.',
            'imagem' => 'img/prod15.jpg',
            'preco' => 22.00,
            'categoria_id' => 3,
        ]);

        // Categoria 4: Organização & Utilidades
        DB::table('produtos')->insert([
            'nome' => 'Estojo Baú Multiuso de Tecido',
            'descricao' => 'Estojo com formato estruturado e grande capacidade interna, excelente para itens de papelaria ou higiene.',
            'imagem' => 'img/prod16.jpg',
            'preco' => 45.00,
            'categoria_id' => 4,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Cesto Organizador de Crochê em Fio de Malha',
            'descricao' => 'Cesto firme e artesanal, ideal para organizar maquiagens, fios, brinquedos ou miudezas da casa.',
            'imagem' => 'img/prod17.jpg',
            'preco' => 48.00,
            'categoria_id' => 4,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Porta-Copos em Tapeçaria (Jogo com 4)',
            'descricao' => 'Conjunto de descansos de copo em tapeçaria estruturada, protegendo superfícies com um toque de design.',
            'imagem' => 'img/prod18.jpeg',
            'preco' => 38.00,
            'categoria_id' => 4,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Nécessaire em Tecido com Acolchoamento',
            'descricao' => 'Bolsa organizadora interna com proteção macia para carregar cosméticos ou acessórios em viagens.',
            'imagem' => 'img/prod19.jpg',
            'preco' => 52.00,
            'categoria_id' => 4,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Porta-Chaves / Suporte Decorativo em Tapeçaria',
            'descricao' => 'Peça utilitária de parede que alia a arte da tapeçaria à organização do hall de entrada.',
            'imagem' => 'img/prod20.jpeg',
            'preco' => 58.00,
            'categoria_id' => 4,
        ]);
    }
}
