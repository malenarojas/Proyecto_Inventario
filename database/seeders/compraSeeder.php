<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedor')->truncate();
        DB::table('proveedor')->insert(['id_proveedor'=>'123','nombre' => 'Renato Diesel lta','direccion'=>'2do anillo av.santos','telefono'=>'67983044','correo'=>'renato@gmail.com']);
        DB::table('proveedor')->insert(['id_proveedor'=>'124','nombre' => 'diesel group','direccion'=>'avenida grigota esq.','telefono'=>'68289044','correo'=>'diesel@gmail.com']);
        DB::table('proveedor')->insert(['id_proveedor'=>'125','nombre' => 'Jhonny Chavez','direccion'=>'3er anillo','telefono'=>'77607963','correo'=>'jhonny@gmail.com']);
        DB::table('proveedor')->insert(['id_proveedor'=>'126','nombre' => 'Dippon Diesel','direccion'=>'av.omar chavez','telefono'=>'76392003','correo'=>'dippon@gmail.com']);
        DB::table('compra')->truncate();
        DB::table('compra')->insert(['total_USD' => '1048','tipo_cambio'=>'6.96','total_BO'=>'7294.08','fecha'=>'20/08/2021','personal_id'=>'133','proveedor_id'=>'123']);
        DB::table('compra')->insert(['total_USD' => '500','tipo_cambio'=>'6.96','total_BO'=>'3480','fecha'=>'13/03/2021','personal_id'=>'134','proveedor_id'=>'124']);
        DB::table('compra')->insert(['total_USD' => '30','tipo_cambio'=>'6.96','total_BO'=>'208.08','fecha'=>'4/5/2021','personal_id'=>'133','proveedor_id'=>'125']);
        DB::table('compra')->insert(['total_USD' => '10','tipo_cambio'=>'6.96','total_BO'=>'69.60','fecha'=>'3/4/2021','personal_id'=>'133','proveedor_id'=>'126']);

        DB::table('detalle_compra')->insert(['compra_id' => '1','producto_id'=>'755-B','cantidad'=>'100','precio_unitario'=>'5','subtotal_USD'=>'133','tipo_cambio'=>'6.96','subtotal_BO'=>'123']);
        DB::table('detalle_compra')->insert(['compra_id' => '2','producto_id'=>'7547545','cantidad'=>'3','precio_unitario'=>'4','subtotal_USD'=>'134','tipo_cambio'=>'6.96','subtotal_BO'=>'123']);
        DB::table('detalle_compra')->insert(['compra_id' => '3','producto_id'=>'755-B','cantidad'=>'2','precio_unitario'=>'5','subtotal_USD'=>'133','tipo_cambio'=>'6.96','subtotal_BO'=>'123']);
        DB::table('detalle_compra')->insert(['compra_id' => '4','producto_id'=>'93400-0200','cantidad'=>'6','precio_unitario'=>'7','subtotal_USD'=>'133','tipo_cambio'=>'6.96','subtotal_BO'=>'123']);
    }
}
