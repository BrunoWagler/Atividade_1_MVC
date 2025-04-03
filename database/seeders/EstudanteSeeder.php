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
            [
                'cpf' => '321.654.987-00',
                'nome' => 'Ana Costa',
                'data_nascimento' => '2002-11-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '654.321.987-00',
                'nome' => 'Felipe Rocha',
                'data_nascimento' => '1998-02-17',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '112.233.445-66',
                'nome' => 'Luciana Pereira',
                'data_nascimento' => '2000-07-04',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '223.344.556-77',
                'nome' => 'Pedro Martins',
                'data_nascimento' => '1997-09-30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '334.455.667-88',
                'nome' => 'Juliana Ferreira',
                'data_nascimento' => '2003-04-14',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '445.566.778-99',
                'nome' => 'Marcos Almeida',
                'data_nascimento' => '1996-12-25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '556.677.889-00',
                'nome' => 'Rita Lima',
                'data_nascimento' => '2002-06-30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '667.788.990-11',
                'nome' => 'Lucas Santos',
                'data_nascimento' => '2001-01-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '778.899.001-22',
                'nome' => 'Beatriz Rocha',
                'data_nascimento' => '2003-09-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '889.900.112-33',
                'nome' => 'Tiago Almeida',
                'data_nascimento' => '1998-03-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '990.011.223-44',
                'nome' => 'Patrícia Lima',
                'data_nascimento' => '2000-10-25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '101.112.223-55',
                'nome' => 'Vitor Souza',
                'data_nascimento' => '1997-07-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '212.223.334-66',
                'nome' => 'Paula Gomes',
                'data_nascimento' => '2002-04-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '323.334.445-77',
                'nome' => 'Fernando Costa',
                'data_nascimento' => '2000-12-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '434.445.556-88',
                'nome' => 'Gabriela Nascimento',
                'data_nascimento' => '1999-11-14',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '545.556.667-99',
                'nome' => 'Ricardo Pinto',
                'data_nascimento' => '2001-02-28',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cpf' => '656.667.778-00',
                'nome' => 'Simone Araújo',
                'data_nascimento' => '2003-06-12',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}
