<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    protected $fillable = ['descricao'];
    protected $guarded = ['id', 'fk_users_id', 'fk_statuses_id'];
    protected $table = 'chamados';
    //
}
