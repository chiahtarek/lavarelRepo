<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;

class Vaga extends Model
{
     use SoftDeletes;

    protected $fillable = [
        'descricao',
        'status',
    ];

    public function ticket() {
        return $this->hasMany('\App\Models\Ticket');
    }

    
}
