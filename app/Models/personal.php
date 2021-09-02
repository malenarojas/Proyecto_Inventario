<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    use HasFactory;
    protected $table='personal';
    public function users(){
        return $this->hasOne(user::class,'personal_id','id');
    }
    public function tipopersonal(){
        return $this->belongsTo(tipo_personal::class,'tipopersonal_id','id');
    }
    public function compra(){
        return $this->hasOne(compra::class,'personal_id','id');
    }
    public function venta(){
        return $this->hasOne(venta::class,'personal_id','id');
    }
}
