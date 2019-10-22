<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChamadoTipo extends Model
{
    protected $fillable = [
    	'tipo'
    ];

    protected $guarded = [
    	'id', 'created_at', 'update_at'
    ];

    protected $table = 'chamado_tipos';
}

}