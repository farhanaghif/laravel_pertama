<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
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
        $faker = Factory::create();
        for ($i=0; $i < 10; $i++) { 
            $data = [
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make('21oke4nc'),
            ];
    
            $user = User::create($data);
            $user->assignRole('user');
        }
    }
}
