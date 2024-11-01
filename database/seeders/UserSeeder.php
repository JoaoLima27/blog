<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'João Pedro - ADMIN',
            'email' => 'joao@pedro.com',
            'password' => Hash::make('123456789'),
            'perfil' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'André Neves - ADMIN',
            'email' => 'andr@andr.com.br',
            'password' => Hash::make('123456789'),
            'perfil' => 'padrao',
        ]);

        DB::table('users')->insert([
            'name' => 'Alanzoka - PADRÃO',
            'email' => 'alan@zoka.com.br',
            'password' => Hash::make('123456789'),
            'perfil' => 'padrao',
        ]);
    }
}
