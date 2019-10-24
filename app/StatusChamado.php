<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusChamado extends Model
{
	public $table = 'status_chamados';
	
    protected $fillable = [
        'comentario'
    ];
}
