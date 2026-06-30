<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Cliente extends Model implements Auditable
{
    use AuditableTrait; 
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
    ];

    public function carro() {
        return $this->hasMany('\App\Models\Carro');
    }
}
