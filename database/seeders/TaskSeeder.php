<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = Project::first();
        $faker = Factory::create();
        for ($i=0; $i <= 100; $i++) { 
            $data = [
                'name' => $faker->sentence(2),
                'project_id' => $faker->numberBetween(4,62),
                'description' => $faker->paragraph(),
                'status' => $faker->randomElement(['PENDING','ON PROGRESS','DONE']),
            ];
            Task::create($data);
        }
    }
}
