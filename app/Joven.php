<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joven extends Model
{
    protected $fillable = [
        'nome','telefone','cargo','igreja_id'
    ];

    public function igrejas(){
        
    }
}
