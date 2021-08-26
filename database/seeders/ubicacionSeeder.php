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
        DB::table('estante')->insert(['id'=>'1','descripcion'=>'estante con puerta']);
        DB::table('estante')->insert(['id'=>'2','descripcion'=>'estante sin puerta']);
        DB::table('estante')->insert(['id'=>'3','descripcion'=>'estante con puerta']);
        DB::table('estante')->insert(['id'=>'4','descripcion'=>'estante sin puerta']);
        DB::table('estante')->insert(['id'=>'5','descripcion'=>'estante con puerta']);
        DB::table('estante')->insert(['id'=>'6','descripcion'=>'estante con doble puerta']);
        DB::table('estante')->insert(['id'=>'7','descripcion'=>'estante con puerta']);
        DB::table('estante')->insert(['id'=>'8','descripcion'=>'estante con cajon']);
        DB::table('estante')->insert(['id'=>'9','descripcion'=>'estante con puerta']);
        DB::table('estante')->insert(['id'=>'10','descripcion'=>'estante con cajon']);

        DB::table('area')->truncate();
        DB::table('area')->insert(['id'=>'1','descripcion'=>'Area de Madera de 2,10 x 1,20 x 0,40']);
        DB::table('area')->insert(['id'=>'2','descripcion'=>'Area de Madera de 1,70 x 1,20 x 0,40']);
        DB::table('area')->insert(['id'=>'3','descripcion'=>'Area de Madera de 1,80 x 1,20 x 0,40']);
        DB::table('area')->insert(['id'=>'4','descripcion'=>'Area de Madera de 1,90 x 1,20 x 0,40']);
        DB::table('area')->insert(['id'=>'5','descripcion'=>'Area de Madera de 1,90 x 1,20 x 0,50']);
        DB::table('area')->insert(['id'=>'6','descripcion'=>'Area de Madera de 2,10 x 1,20 x 0,40']);
        DB::table('area')->insert(['id'=>'7','descripcion'=>'Area de Madera de 3,70 x 1,20 x 0,40']);
        DB::table('area')->insert(['id'=>'8','descripcion'=>'Area de Madera de 1,80 x 1,20 x 0,50']);
        DB::table('area')->insert(['id'=>'9','descripcion'=>'Area de Madera de 5,90 x 1,20 x 0,30']);
        DB::table('area')->insert(['id'=>'10','descripcion'=>'Area de Madera de 1,90 x 1,20 x 0,50']);

        DB::table('ubicacion')->truncate();
        DB::table('ubicacion')->insert(['id'=>'1','descripcion'=>'fila 1 columna 2','area_id'=>'1','estante_id'=>'2','producto_codigo'=>'7547545']);
        DB::table('ubicacion')->insert(['id'=>'2','descripcion'=>'fial 3 columna 4','area_id'=>'2','estante_id'=>'2','producto_codigo'=>'755-B']);
        DB::table('ubicacion')->insert(['id'=>'3','descripcion'=>'fila 2 columna 1','area_id'=>'1','estante_id'=>'2','producto_codigo'=>'7547545']);
        DB::table('ubicacion')->insert(['id'=>'4','descripcion'=>'fila 3 columna 3','area_id'=>'1','estante_id'=>'2','producto_codigo'=>'755-B']);
    }
}
