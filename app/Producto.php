<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps = false;

    protected $fillable = ['id','descripcion',
                           'precio','departamento',
                           'existencia','stockmin',
                           'stockmax', 'imagen'];

    public function ventas()
    {
        return $this->belongsToMany(Venta::class);
    }
}
