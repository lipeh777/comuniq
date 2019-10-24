<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubtipoChamado extends Model
{
	protected $fillable = ['descricao'];
	protected $guarded = ['id'];
	protected $table = 'subtipos_chamados';
    //
}
