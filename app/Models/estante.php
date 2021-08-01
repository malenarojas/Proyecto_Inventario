<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estante extends Model
{
    use HasFactory;
    protected $table='estante';
    public function ubicacion(){
        return $this->hasOne(ubicacion::class,'estante_num','num_estante');
    }
}
