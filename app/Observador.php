<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observador extends Model
{

	// protected $fillable = [''];
	protected $guarded = ['id', 'fk_users_id', 'fk_chamados_id'];
	protected $table = 'observadors';
  // Essa tabela não tem itens para ser preenchidos.
}
