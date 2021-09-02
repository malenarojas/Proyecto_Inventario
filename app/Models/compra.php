<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;
    protected $table='compra';
    public function proveedor(){
        return $this->belongsTo(proveedor::class,'proveedor_id','id');
    }
    public function personal(){
        return $this->belongsTo(personal::class,'personal_id','id');
    }
    public function detallecompra(){
        return $this->hasMany(DetalleCompra::class,'compra_id','id');
    }
}
