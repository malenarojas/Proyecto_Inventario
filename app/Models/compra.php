<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;
    protected $table='compra';
    public function proveedor(){
        return $this->belongsTo(proveedor::class,'id_proveedor','proveedor_id');
    }
    public function personal(){
        return $this->belongsTo(personal::class,'id_personal','id');
    }
    public function detallecompra(){
        return $this->hasMany(DetalleCompra::class,'compra_id','id');
    }
}
