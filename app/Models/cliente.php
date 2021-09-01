<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table='cliente';
    /**
     * @var mixed
     */

    public function venta(){
        return $this->hasOne(venta::class,'cliente_id','id');
    }

}
