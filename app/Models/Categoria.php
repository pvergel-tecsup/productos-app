<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $primaryKey = 'id_categoria';

    protected $fillable = ['descripcion'];

    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'id_categoria', 'id_categoria');
    }
}
