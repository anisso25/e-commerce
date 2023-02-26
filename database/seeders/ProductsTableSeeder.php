<?php


namespace Database\Seeders;
use App\Produit;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*         $faker = Factory\Factory::create();

        for ($i=0; $i < 30; $i++) {
            Produit::create([
                'uuid' => faker-> unixTime($max = 'now'),
                'product_name' => faker->name,
                'prix' => faker->numberBetween(15, 300) * 100,
                'image_p' => 'https://via.placeholder.com/197x217',
                'status' => '1',
                'category_id' => faker->name,
                'marque_id' => faker->name
            ]);
        } */
    }
}
