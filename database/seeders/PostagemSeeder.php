<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'categoria_id' => 1,
            'user_id' => 1,
            'titulo'=> 'Minha Primeira Postagem',
            'conteudo' => 'Conteúdo da minha primeira postagem'
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 2,
            'user_id' => 1,
            'titulo'=> 'Minha Segunda Postagem',
            'conteudo' => 'Conteúdo da minha segunda postagem'
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 3,
            'user_id' => 1,
            'titulo'=> 'Minha Terceira Postagem',
            'conteudo' => 'Conteúdo da minha Terceira postagem'
        ]);
    }
}
