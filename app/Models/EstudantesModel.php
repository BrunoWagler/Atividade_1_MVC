<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class EstudantesModel extends Model
{
    protected $table = "estudantes";
    
    protected $fillable = 
    [
        'cpf',
        'nome',
        'data_nascimento'
    ];
}
