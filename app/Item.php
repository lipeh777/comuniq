<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['numero_tombamento'];
    protected $guarded = ['id', 'fk_instituicoes_id'];
    protected $table = 'item_patrimonios';
    //
}
