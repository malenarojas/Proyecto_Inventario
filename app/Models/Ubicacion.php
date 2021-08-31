<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;
    protected $table='ubicacion';
    public function area(){
        return $this->belongsTo(area::class,'area_id','id');
    }
    public function estante(){
        return $this->belongsTo(estante::class,'estante_id','id');
    }
    public function producto(){
        return $this->belongsTo(producto::class,'producto_codigo','codigo');
    }
}
