<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cliente')->truncate();
<<<<<<< HEAD
        DB::table('cliente')->insert(['id'=>'11','nombre' => 'POPLAR CAPITAL S.A','direccion'=>'Av.banzer','telefono'=>'76899234','correo'=>'poplarcapital@gmail.com']);
        DB::table('cliente')->insert(['id'=>'12','nombre' => 'DIESEL GROUP','direccion'=>'Av.grigota','telefono'=>'64890833','correo'=>'dieselgroup@gmail.com']);
        DB::table('cliente')->insert(['id'=>'13','nombre' => 'DENSO CRUZ','direccion'=>'av.paurito','telefono'=>'76453344','correo'=>'densocruz@gmail.com']);
=======
        DB::table('cliente')->insert(['nombre' => 'POPLAR CAPITAL S.A','direccion'=>'Av.banzer','telefono'=>'76899234','correo'=>'poplarcapital@gmail.com']);
        DB::table('cliente')->insert(['nombre' => 'DIESEL GROUP','direccion'=>'Av.grigota','telefono'=>'64890833','correo'=>'dieselgroup@gmail.com']);
        DB::table('cliente')->insert(['nombre' => 'DENSO CRUZ','direccion'=>'av.paurito','telefono'=>'76453344','correo'=>'densocruz@gmail.com']);
        DB::table('cliente')->insert(['nombre' => 'DENSO ','direccion'=>'av.12 de julio','telefono'=>'76459944','correo'=>'densocruz@gmail.com']);
        DB::table('venta')->truncate();
        DB::table('venta')->insert(['total_USD' => '1048','tipo_cambio'=>'6.96','total_BO'=>'7294.08','fecha'=>'20/08/2021','forma_pago'=>'al contado','personal_id'=>'133','cliente_id'=>'1']);
        DB::table('venta')->insert(['total_USD' => '500','tipo_cambio'=>'6.96','total_BO'=>'3480','fecha'=>'13/03/2021','forma_pago'=>'al contado','personal_id'=>'134','cliente_id'=>'2']);
        DB::table('venta')->insert(['total_USD' => '30','tipo_cambio'=>'6.96','total_BO'=>'208.08','fecha'=>'4/5/2021','forma_pago'=>'al contado','personal_id'=>'133','cliente_id'=>'3']);
        DB::table('venta')->insert(['total_USD' => '10','tipo_cambio'=>'6.96','total_BO'=>'69.60','fecha'=>'3/4/2021','forma_pago'=>'al contado','personal_id'=>'133','cliente_id'=>'4']);
        DB::table('detalle_venta')->truncate();
        DB::table('detalle_venta')->insert(['venta_id' => '1','producto_id'=>'755-B','cantidad'=>'100','precio_unitario'=>'5','subtotal_USD'=>'133','tipo_cambio'=>'6.96','subtotal_BO'=>'123']);
        DB::table('detalle_venta')->insert(['venta_id' => '2','producto_id'=>'7547545','cantidad'=>'3','precio_unitario'=>'4','subtotal_USD'=>'134','tipo_cambio'=>'6.96','subtotal_BO'=>'123']);
        DB::table('detalle_venta')->insert(['venta_id' => '3','producto_id'=>'755-B','cantidad'=>'2','precio_unitario'=>'5','subtotal_USD'=>'133','tipo_cambio'=>'6.96','subtotal_BO'=>'123']);
        DB::table('detalle_venta')->insert(['venta_id' => '4','producto_id'=>'93400-0200','cantidad'=>'6','precio_unitario'=>'7','subtotal_USD'=>'133','tipo_cambio'=>'6.96','subtotal_BO'=>'123']);
>>>>>>> 541b572b90052cf7430d904d7528136cb268ed03
    }
}
