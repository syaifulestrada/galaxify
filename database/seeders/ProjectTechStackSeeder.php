<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTechStackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectTechStacks = [
            [
                'name' => 'Bootstrap',
                'type' => 'tech_stack',
            ],
            [
                'name' => 'Express.js',
                'type' => 'tech_stack',
            ],
            [
                'name' => 'FilamentPHP',
                'type' => 'tech_stack',
            ],
            [
                'name' => 'Flutter',
                'type' => 'tech_stack',
            ],
            [
                'name' => 'Laravel',
                'type' => 'tech_stack',
            ],
            [
                'name' => 'Livewire',
                'type' => 'tech_stack',
            ],
            [
                'name' => 'MongoDB',
                'type' => 'tech_stack',
            ],
            [
                'name' => 'MySQL',
                'type' => 'tech_stack',
            ],
            [
                'name' => 'React.js',
                'type' => 'tech_stack',
            ],
            [
                'name' => 'Swift',
                'type' => 'tech_stack',
            ],
            [
                'name' => 'Tailwindcss',
                'type' => 'tech_stack',
            ],
        ];

        foreach ($projectTechStacks as $techStack) {
            DB::table('categories')->insert([
                'name' => $techStack['name'],
                'type' => $techStack['type'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
