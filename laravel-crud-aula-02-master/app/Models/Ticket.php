<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
     use SoftDeletes;

    protected $fillable = [
        'data_entrada',
        'data_saida',
        'status',
        'carro_id',
        'vaga_id',
        'valor',
    ];

    public function curso() {
        return $this->belongsTo('\App\Models\Curso');
    }

    public function disciplina() {
        return $this->belongsToMany('\App\Models\Disciplina', 'matriculas');
    }
}
