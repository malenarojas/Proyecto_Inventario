<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;
    protected $table='venta';
    public function cliente(){
        return $this->belongsTo(cliente::class,'cliente_id','id');
    }
    public function personal(){
        return $this->belongsTo(personal::class,'personal_id','id');
    }
    public function detalleventa(){
        return $this->hasMany(DetalleCompra::class,'venta_id','id');
    }
}
