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
        DB::table('tipopersonal')->insert(['cargo'=>'administrador']);
        DB::table('tipopersonal')->insert(['cargo'=>'vendedor']);
        DB::table('tipopersonal')->insert(['cargo'=>'tecnico']);
        DB::table('tipopersonal')->insert(['cargo'=>'secretario']);
        DB::table('personal')->truncate();
        DB::table('personal')->insert(['nombre' => 'JAIME JUAN CARLOS','apellido'=>'ROJAS VILLARROEL','CI'=>'27635468','telefono'=>'6829393','sexo'=>'M','direccion'=>'BARRIO 30 DE AGOSTO','tipopersonal_id'=>'1']);
        DB::table('personal')->insert(['nombre' => 'MARIA JESUS','apellido'=>'SUAREZ GOMEZ','CI'=>'23534546','telefono'=>'6677899','sexo'=>'F','direccion'=>'ALTO SAN PEDRO','tipopersonal_id'=>'2']);
        DB::table('personal')->insert(['nombre' => 'JOSE','apellido'=>'RODRIGUEZ MAMANI','CI'=>'36574534','telefono'=>'7894736','sexo'=>'M','direccion'=>'CALLE BARRIENTOS','tipopersonal_id'=>'3']);
        DB::table('personal')->insert(['nombre' => 'LUIS','apellido'=>'QUISPE MAMANI','CI'=>'34565367','telefono'=>'7344654','sexo'=>'M','direccion'=>'AV.GRIGOTA','tipopersonal_id'=>'4']);

    }
}
