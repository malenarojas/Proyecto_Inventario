<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    use HasFactory;
    protected $table='proveedor';
    protected $primaryKey = 'id_proveedor';
    public function compra(){
        return $this->hasOne(compra::class,'proveedor_id','id');
    }
}
