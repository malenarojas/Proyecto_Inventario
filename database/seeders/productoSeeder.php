<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marca')->truncate();
        DB::table('marca')->insert(['id'=>'15','descripcion' => 'DENSO']);
        DB::table('marca')->insert(['id'=>'21','descripcion' => 'BOSCH']);
        DB::table('marca')->insert(['id'=>'78','descripcion' => 'DELPHY']);
        DB::table('marca')->insert(['id'=>'56','descripcion' => 'GARRET']);

        DB::table('categoria')->truncate();
        DB::table('categoria')->insert(['id'=>'1','descripcion' => 'BOMBAS INYECTORAS EN LINEA'/*, 'created_at' => now(),'updated_at'=>now()*/]);
        DB::table('categoria')->insert(['id'=>'2','descripcion' => 'BOMBAS INYECTORAS ROTATIVA'/*, 'created_at' => now(),'updated_at'=>now()*/]);
        DB::table('categoria')->insert(['id'=>'3','descripcion' => 'INYECTORES'/*, 'created_at' => now(),'updated_at'=>now()*/]);
        DB::table('categoria')->insert(['id'=>'4','descripcion' => 'TURBOS'/*, 'created_at' => now(),'updated_at'=>now()*/]);


        DB::table('nacionalidad')->truncate();
        DB::table('nacionalidad')->insert(['id_nacionalidad'=>'BO','nombre_pais' => 'BOLIVIA']);
        DB::table('nacionalidad')->insert(['id_nacionalidad'=>'BR','nombre_pais' => 'BRASIL']);
        DB::table('nacionalidad')->insert(['id_nacionalidad'=>'CO','nombre_pais' => 'COLOMBIA']);
        DB::table('nacionalidad')->insert(['id_nacionalidad'=>'AR','nombre_pais' => 'ARGENTINA']);

        DB::table('producto')->truncate();
        DB::table('producto')->insert(['codigo'=>'7547545','nombre' => 'arandela',
            'descripcion_tecnica'=>'de plata','medida'=>'2 cm','stock_minimo'=>'2','cantidad'=>'100','estado'=>'Disponible',
            'precio_compra_USD'=>'4 ','tipo_cambio'=>'6.96','precio_compra_BO'=>'24','importe_ganacia'=>'10','precio_venta_USD'=>'30',
            'precio_venta_BO'=>'34','categoria_id'=>'1','marca_id'=>'15','nacionalidad_id'=>'BO']);
        DB::table('producto')->insert(['codigo'=>'755-B','nombre' => 'bomba inyectora',
            'descripcion_tecnica'=>'de plata','medida'=>'2 cm','stock_minimo'=>'1','cantidad'=>'100','estado'=>'Disponible',
            'precio_compra_USD'=>'100 ','tipo_cambio'=>'6.96','precio_compra_BO'=>'600','importe_ganacia'=>'10','precio_venta_USD'=>'120',
            'precio_venta_BO'=>'700','categoria_id'=>'2','marca_id'=>'21','nacionalidad_id'=>'BO']);
        DB::table('producto')->insert(['codigo'=>'93400-0200','nombre' => 'ojal de espiga',
            'descripcion_tecnica'=>'de plata','medida'=>'7 cm','stock_minimo'=>'1','cantidad'=>'50','estado'=>'Disponible',
            'precio_compra_USD'=>'1000 ','tipo_cambio'=>'6.96','precio_compra_BO'=>'6000','importe_ganacia'=>'10','precio_venta_USD'=>'1200',
            'precio_venta_BO'=>'7000','categoria_id'=>'3','marca_id'=>'56','nacionalidad_id'=>'BR']);

    }
}
