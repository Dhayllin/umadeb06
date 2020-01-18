<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Igreja extends Model
{
    protected $fillable=[
        'id','descricao','endereco'
    ];

    public function jovens()
    {
        return $this->belongsTo('App\Joven','igreja_id');
    }
}
