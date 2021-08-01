<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $table='categoria';
    public function producto(){
        return $this->hasOne(producto::class,'categoria_id','id_categoria');
    }
}
