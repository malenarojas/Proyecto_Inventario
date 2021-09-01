<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;
    protected $table='venta';
    public function cliente(){
        return $this->belongsTo(cliente::class,'id_cliente','cliente_id');
    }
    public function personal(){
        return $this->belongsTo(personal::class,'id_personal','id');
    }
    public function detalleventa(){
        return $this->hasMany(DetalleCompra::class,'venta_id','id');
    }
}
