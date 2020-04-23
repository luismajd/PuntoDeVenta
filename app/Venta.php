<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = ['cliente_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }
}
