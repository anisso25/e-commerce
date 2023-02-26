<?php

namespace Database\Seeders;


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
            $this->call(UserSeeder::class);
            $this->call(CurrenciesTableSeeder::class);

    //    \App\Models\Currency::factory(2)->create();
    //    \App\Models\Marque::factory(6)->create();
    //    \App\Models\Categorie::factory(6)->create();
    //    \App\Models\Produit::factory(21)->create();

    }
}
