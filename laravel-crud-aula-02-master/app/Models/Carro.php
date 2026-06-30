<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Carro extends Model implements Auditable
{
     use SoftDeletes;
     use AuditableTrait; 

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
    public function ticket() {
        return $this->hasMany('\App\Models\Ticket');
    }

}
