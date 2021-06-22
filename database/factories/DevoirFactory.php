<?php

namespace Database\Factories;

use App\Models\Devoir;
use Illuminate\Database\Eloquent\Factories\Factory;

class DevoirFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Devoir::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

                'titre' => $this->faker->word,
                'objet' => $this->faker->text,
                'created_at' => $this->faker->date('Y-m-d H:i:s'),
                'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
