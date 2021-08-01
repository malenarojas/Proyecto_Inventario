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
    public function productos(){
        return $this->belongsToMany(producto::class);
    }
}
