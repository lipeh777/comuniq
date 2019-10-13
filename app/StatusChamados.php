<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusChamados extends Model
{
	public $table = 'status_chamados';
	
    protected $fillable = [
        'comentario'
    ];
}
