<?php

namespace Database\Seeders;

use App\Models\Admin\ProjectController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 100; $i++) { 
            $newProject = new Project();
            $newProject->title = ucfirst($faker->unique()->words(4, true));
            $newProject->content = $faker->paragraph(10, true);
            $newProject->slug = $faker->slug();
            $newProject->image = $faker->imageUrl(480, 360, "project", true, "projects", true, "png");
            $newProject->save();
        }
    }
}
