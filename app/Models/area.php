<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    use HasFactory;
    protected $table='area';

    public function ubicacion(){
        return $this->hasOne(ubicacion::class,'area_id','id');
    }
}
