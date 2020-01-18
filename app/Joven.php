<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joven extends Model
{
    protected $fillable = [
        'nome','telefone','cargo','igreja_id','idade','igreja_diff','status_presenca'
    ];

    /**
 * Get the post that owns the comment.
 */
public function igreja()
{
    return $this->hasMany('App\Igreja');
}
}
