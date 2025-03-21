<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
            Task::create([
            'name' => $faker->sentence(3), 
            'description'=> $faker->text(100), 
            'status'=> $faker->boolean()
        ]);
        }
    }
}
