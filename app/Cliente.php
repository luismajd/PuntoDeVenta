<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;

    protected $fillable = ['id','nombre',
                           'rfc','domicilio',
                           'telefono','correo',
                           'sexo'];

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
