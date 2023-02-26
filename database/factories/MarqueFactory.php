<?php

namespace Database\Factories;
use App\Models\Marque;

use Illuminate\Database\Eloquent\Factories\Factory;

class MarqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'marke_name' => $this->faker->name(),
            'icon' => 'https://via.placeholder.com/197x217',
            'status' => '1',
        ];

        [
            'uuid' => $this->faker->uuid,
            'marke_name' => $this->faker->name(),
            'icon' => 'https://via.placeholder.com/197x217',
            'status' => '1',
        ];
    }
}
