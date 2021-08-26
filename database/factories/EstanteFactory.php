<?php

namespace Database\Factories;

use App\Models\Estante;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstanteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estante::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'num_estante'=>$this->faker->text(10),
            'descripcion'=>$this->faker->text(100),
            'created_at'=>now(),
            'updated_at'=>now()


        ];
    }
}
