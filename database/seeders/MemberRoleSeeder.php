<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Backend Developer',
                'type' => 'role',
            ],
            [
                'name' => 'Dev Ops',
                'type' => 'role',
            ],
            [
                'name' => 'Frontend Developer',
                'type' => 'role',
            ],
            [
                'name' => 'Marketing',
                'type' => 'role',
            ],
            [
                'name' => 'Project Manager',
                'type' => 'role',
            ],
            [
                'name' => 'UI/UX Desinger',
                'type' => 'role',
            ],
        ];
        foreach ($roles as $role) {
            DB::table('categories')->insert([
                'name' => $role['name'],
                'type' => $role['type'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
