<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        Project::truncate();

        for ($i = 0; $i < 10; $i++) {
        $new_project = new Project();
        $new_project->name_project = $faker->sentence(3);
        $new_project->summary = $faker->sentence();
        $new_project->slug = Str::slug($new_project->name_project);
        $new_project->client = $faker->company();
        $new_project->shipped_at = $faker->date();
        $new_project->save();  
        }
        
    }
}
