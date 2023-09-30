<?php

namespace Database\Seeders;

use App\Models\Ability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tables = [
            'client',
            'organization',
            'project',
            'task',
            'user',
            'role',
        ];

        $operations = [
            'create',
            'view-any',
            'edit-any',
            'delete-any',
        ];

        foreach ($tables as $table){
            foreach ($operations as $operation){
                Ability::create(['title' => $operation . '-' . $table ]);
            }
        }
    }
}
