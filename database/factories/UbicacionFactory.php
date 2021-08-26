<?php

namespace Database\Factories;

use App\Models\Ubicacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class UbicacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ubicacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion'=>$this->faker->text(100),
            'num_estante'=>$this->faker->numberBetween(1,10),
            'num_area'=>$this->faker->numberBetween(1,10),
            'created_at'=>now(),
            'updated_at'=>now()
        ];
    }
}
