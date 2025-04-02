<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TurmasModel extends Model
{

    protected $table = 'turmals';

    protected $fillable= [
        'numero_turma',
        'semestre',
        'periodo'
    ];
}

