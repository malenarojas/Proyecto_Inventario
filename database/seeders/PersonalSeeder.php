<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipopersonal')->truncate();
        DB::table('tipopersonal')->insert(['id'=>'500','cargo'=>'administrador']);
        DB::table('tipopersonal')->insert(['id'=>'501','cargo'=>'vendedor']);
        DB::table('tipopersonal')->insert(['id'=>'502','cargo'=>'tecnico']);
        DB::table('tipopersonal')->insert(['id'=>'503','cargo'=>'secretario']);
        DB::table('personal')->truncate();
        DB::table('personal')->insert(['id'=>'133','nombre' => 'JAIME JUAN CARLOS','apellido'=>'ROJAS VILLARROEL','CI'=>'27635468','telefono'=>'6829393','sexo'=>'M','direccion'=>'BARRIO 30 DE AGOSTO','tipopersonal_id'=>'500']);
        DB::table('personal')->insert(['id'=>'134','nombre' => 'MARIA JESUS','apellido'=>'SUAREZ GOMEZ','CI'=>'23534546','telefono'=>'6677899','sexo'=>'F','direccion'=>'ALTO SAN PEDRO','tipopersonal_id'=>'501']);
        DB::table('personal')->insert(['id'=>'135','nombre' => 'JOSE','apellido'=>'RODRIGUEZ MAMANI','CI'=>'36574534','telefono'=>'7894736','sexo'=>'M','direccion'=>'CALLE BARRIENTOS','tipopersonal_id'=>'502']);
        DB::table('personal')->insert(['id'=>'136','nombre' => 'LUIS','apellido'=>'QUISPE MAMANI','CI'=>'34565367','telefono'=>'7344654','sexo'=>'M','direccion'=>'AV.GRIGOTA','tipopersonal_id'=>'503']);

    }
}
