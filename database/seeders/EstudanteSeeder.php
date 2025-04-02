<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstudanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 
        DB::table('estudantes')->insert([
            [
                'cpf' => '123.456.789-00',
                'nome' => 'João Silva',
                'data_nascimento' => '2000-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '987.654.321-00',
                'nome' => 'Maria Oliveira',
                'data_nascimento' => '2001-05-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '456.789.123-00',
                'nome' => 'Carlos Souza',
                'data_nascimento' => '1999-08-22',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
