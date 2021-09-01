<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;
    protected $table='detalle_venta';
    public function venta(){
        return $this->belongsTo(compra::class,'venta_id','id');
    }
    public function producto(){
        return $this->belongsTo(producto::class,'producto_id','codigo');
    }
}
