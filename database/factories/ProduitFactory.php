<?php

namespace Database\Factories;
use App\Models\Marque;
use App\Models\Categorie;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
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
            'product_name' => $this->faker->name(),
            'prix' => $this->faker->numberBetween(15, 300) * 100,
            'image_p' => 'https://via.placeholder.com/197x217',
            'discription_p' => $this->faker->text(),
            'status' => '1',
            'category_id' => Categorie::first()->id,
            'marque_id' => Marque::first()->id
        ];
    }
}
