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
        DB::table('cliente')->insert(['id_cliente'=>'11','nombre' => 'POPLAR CAPITAL S.A','direccion'=>'Av.banzer','telefono'=>'76899234','correo'=>'poplarcapital@gmail.com']);
        DB::table('cliente')->insert(['id_cliente'=>'12','nombre' => 'DIESEL GROUP','direccion'=>'Av.grigota','telefono'=>'64890833','correo'=>'dieselgroup@gmail.com']);
        DB::table('cliente')->insert(['id_cliente'=>'13','nombre' => 'DENSO CRUZ','direccion'=>'av.paurito','telefono'=>'76453344','correo'=>'densocruz@gmail.com']);
    }
}
