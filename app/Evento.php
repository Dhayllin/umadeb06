<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    private $id;
    private $title;
    private $start;
    private $end;
    private $allDay;
    private $backgroundColor;
    private $color;
    private $icon;
    private $url;
    
    protected $fillable = [
        'nome', 'descricao', 'dt_inicio','dt_fim'
    ];
}
