<?php

namespace Database\Seeders;
use     App\Models\Estante;
use     App\Models\Area;
use App\Models\Ubicacion;
use Database\Factories\AreaFactory;
use Database\Factories\EstanteFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       // estante::factory(10)->create();
       // Area::factory(10)->create();
      //  Ubicacion::factory(10)->create();
        $this->call(productoSeeder::class);
        $this->call(ubicacionSeeder::class);
        $this->call(PersonalSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CompraSeeder::class);
        $this->call(VentaSeeder::class);

    }
}
