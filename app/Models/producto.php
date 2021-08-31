<?php

namespace App\Models;

use Database\Seeders\ubicacionSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $table='producto';
    public function marca(){
        return $this->belongsTo(marca::class,'marca_id','id');
    }
    public function categoria(){
        return $this->belongsTo(categoria::class,'categoria_id','id');
    }
    public function nacionalidad(){
        return $this->belongsTo(nacionalidad::class,'id_nacionalidad','nacionalidad_id');
    }
    public function ubicacion(){
        return $this->hasOne(ubicacion::class,'producto_codigo','codigo');
    }
    public function ventas(){
        return $this->belongsToMany(venta::class);
    }
    public function compras(){
        return $this->belongsToMany(compra::class);
    }
    public function detallecompra(){
        return $this->hasMany(DetalleCompra::class,'producto_id','codigo');
    }
    public function detalleventa(){
        return $this->hasMany(DetalleVenta::class,'producto_id','codigo');
    }
}
