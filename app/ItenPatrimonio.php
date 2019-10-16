<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItenPatrimonio extends Model
{
    protected $fillable = ['numero_tombamento'];
    protected $guarded = ['id', 'fk_instituicoes_id'];
    protected $table = 'iten_patrimonios';
    //
}
