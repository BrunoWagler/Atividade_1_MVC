<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstudantesModel extends Model
{
    protected $fillable = [
        'Cpf',
        'Nome',
        'Data_nascimento'
    ];
}
