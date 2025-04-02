<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurmalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('turmals')->insert([
            [
                'numero_turma' => 101,
                'semestre' => 1,
                'periodo' => 'Matutino',  
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'numero_turma' => 102,
                'semestre' => 1,
                'periodo' => 'Vespertino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'numero_turma' => 103,
                'semestre' => 2,
                'periodo' => 'Noturno',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'numero_turma' => 104,
                'semestre' => 2,
                'periodo' => 'Matutino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
