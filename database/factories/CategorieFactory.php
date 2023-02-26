<?php

namespace Database\Factories;
use App\Models\Marque;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieFactory extends Factory
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
            'category_name' => $this->faker->name(),
            'discription_c' => $this->faker->text(),
            'image_c' => 'https://via.placeholder.com/197x217',
            'status' => '1',
            'marque_id' => Marque::first()->id
        ];
    }
}
