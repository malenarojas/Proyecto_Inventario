<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    use HasFactory;
    protected $table='detalle_compra';
    public function compra(){
        return $this->belongsTo(compra::class,'id','compra_id');
    }
    public function producto(){
        return $this->belongsTo(producto::class,'codigo','producto_id');
    }
}
