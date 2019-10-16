<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaItem extends Model
{
    // protected $fillable();
    protected $guarded = ['id', 'fk_setors_id'];
    protected $table = 'categoria_de_itens';
    //
}
