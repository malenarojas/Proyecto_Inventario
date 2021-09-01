<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table='cliente';
<<<<<<< HEAD
    /**
     * @var mixed
     */

=======
    protected $primaryKey = 'id_cliente';
>>>>>>> 541b572b90052cf7430d904d7528136cb268ed03
    public function venta(){
        return $this->hasOne(venta::class,'cliente_id','id');
    }

}
