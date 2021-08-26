<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nacionalidad extends Model
{

    use HasFactory;
    protected $table='nacionalidad';
    //protected $primaryKey='id_nacionalidad';

    protected $fillable = [
        'id_nacionalidad',
        'nombre_pais',
    ];
    public function producto(){
        return $this->hasOne(producto::class,'nacionalidad_id','id_nacionalidad');
    }
}
