<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ubicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estante')->truncate();
        DB::table('estante')->insert(['descripcion'=>'estante con puerta']);
        DB::table('estante')->insert(['descripcion'=>'estante sin puerta']);
        DB::table('estante')->insert(['descripcion'=>'estante con puerta']);
        DB::table('estante')->insert(['descripcion'=>'estante sin puerta']);
        DB::table('estante')->insert(['descripcion'=>'estante con puerta']);
        DB::table('estante')->insert(['descripcion'=>'estante con doble puerta']);
        DB::table('estante')->insert(['descripcion'=>'estante con puerta']);
        DB::table('estante')->insert(['descripcion'=>'estante con cajon']);
        DB::table('estante')->insert(['descripcion'=>'estante con puerta']);
        DB::table('estante')->insert(['descripcion'=>'estante con cajon']);

        DB::table('area')->truncate();
        DB::table('area')->insert(['descripcion'=>'Area de Madera de 2,10 x 1,20 x 0,40']);
        DB::table('area')->insert(['descripcion'=>'Area de Madera de 1,70 x 1,20 x 0,40']);
        DB::table('area')->insert(['descripcion'=>'Area de Madera de 1,80 x 1,20 x 0,40']);
        DB::table('area')->insert(['descripcion'=>'Area de Madera de 1,90 x 1,20 x 0,40']);
        DB::table('area')->insert(['descripcion'=>'Area de Madera de 1,90 x 1,20 x 0,50']);
        DB::table('area')->insert(['descripcion'=>'Area de Madera de 2,10 x 1,20 x 0,40']);
        DB::table('area')->insert(['descripcion'=>'Area de Madera de 3,70 x 1,20 x 0,40']);
        DB::table('area')->insert(['descripcion'=>'Area de Madera de 1,80 x 1,20 x 0,50']);
        DB::table('area')->insert(['descripcion'=>'Area de Madera de 5,90 x 1,20 x 0,30']);
        DB::table('area')->insert(['descripcion'=>'Area de Madera de 1,90 x 1,20 x 0,50']);

        DB::table('ubicacion')->truncate();
        DB::table('ubicacion')->insert(['descripcion'=>'fila 1 columna 2','area_id'=>'1','estante_id'=>'2','producto_codigo'=>'7547545']);
        DB::table('ubicacion')->insert(['descripcion'=>'fial 3 columna 4','area_id'=>'2','estante_id'=>'2','producto_codigo'=>'755-B']);
        DB::table('ubicacion')->insert(['descripcion'=>'fila 2 columna 1','area_id'=>'1','estante_id'=>'2','producto_codigo'=>'7547545']);
        DB::table('ubicacion')->insert(['descripcion'=>'fila 3 columna 3','area_id'=>'1','estante_id'=>'2','producto_codigo'=>'755-B']);
    }
}
