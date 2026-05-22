<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectCategories = [
            [
                'name' => 'Android Development',
                'type' => 'project',
            ],
            [
                'name' => 'Company Profile Website',
                'type' => 'project',
            ],
            [
                'name' => 'IOS Development',
                'type' => 'project',
            ],
            [
                'name' => 'Mobile Development',
                'type' => 'project',
            ],
            [
                'name' => 'Portfolio Website',
                'type' => 'project',
            ],
            [
                'name' => 'Rest API',
                'type' => 'project',
            ],
            [
                'name' => 'Web Development',
                'type' => 'project',
            ],
        ];

        foreach ($projectCategories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'type' => $category['type'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
