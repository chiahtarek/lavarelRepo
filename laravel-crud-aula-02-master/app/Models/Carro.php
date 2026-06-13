<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;

class Carro extends Model
{
     use SoftDeletes;

    protected $fillable = [
        'placa',
        'modelo',
        'marca',
        'cor',
        'cliente_id', 
    ];

    public function cliente() {
        return $this->belongsTo('\App\Models\Cliente');
    }

}
