<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Ticket extends Model implements Auditable
{
     use SoftDeletes;
     use AuditableTrait; 

    protected $fillable = [
        'data_entrada',
        'data_saida',
        'status',
        'carro_id',
        'vaga_id',
        'valor',
    ];

    public function carro() {
        return $this->belongsTo('\App\Models\Carro');
    }

    public function vaga() {
        return $this->belongsTo('\App\Models\Vaga');
    }
}
