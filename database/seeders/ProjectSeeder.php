<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i <= 30; $i++) { 
            $data = [
                'name' => $faker->sentence(2),
                'leader_id' => $faker->numberBetween(1,3),
                'owner' => $faker->randomElement(['Hafecs','Digitaliz','BCTI']),
                'deadline' => $faker->date(),
                'progress' => $faker->numberBetween(5,100),
                'description' => $faker->paragraph(),
            ];
            Project::create($data);
        }
    }
}
