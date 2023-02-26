<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alpha',
            'email' => 'alpha@alpha-computer-dz.com',
            'password' => Hash::make('Alpha@2022*'),
            'email_verified_at' => now(),
            'status' => '1',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'anisso25',
            'email' => 'rahmoni162@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'status' => '1',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'status' => '1',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'status' => '1',
            'role' => 'user',
        ]);
    }
}
