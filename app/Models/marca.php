<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    use HasFactory;
    protected $table='marca';
    public function producto(){
        return $this->hasOne(producto::class,'marca_id','id');
    }
}
