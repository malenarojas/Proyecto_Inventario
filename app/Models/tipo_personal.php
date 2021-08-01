<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_personal extends Model
{
    use HasFactory;
    protected $table='tipopersonal';
    public function personal(){
        return $this->hasOne(personal::class,'tipopersonal_id','id_tipopersonal');
    }

}
