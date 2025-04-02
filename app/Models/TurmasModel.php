<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TurmasModel extends Model
{
    protected $fillable = [
       'NumeroDaTurma',
       'Semestre',
       'Período'
    ];
}
