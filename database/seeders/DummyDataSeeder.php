<?php

namespace Database\Seeders;

use App\Models\Ability;
use App\Models\Client;
use App\Models\Organization;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory()->count(100)->create();
        $abilities = Ability::count();
        $roles = Role::all();

        foreach ($users as $user) {
            if (rand(0, 1) === 1) continue;
            DB::table('user_abilities')->insert([
                'user_id' => $user->id,
                'ability_id' => rand(1, $abilities)
            ]);
        }

        foreach ($roles as $role) {
            DB::table('role_abilities')->insert([
                [   'role_id' => $role->id,
                    'ability_id' => rand(1, $abilities)
                ],
                [   'role_id' => $role->id,
                    'ability_id' => rand(1, $abilities)
                ],
                [   'role_id' => $role->id,
                    'ability_id' => rand(1, $abilities)
                ],
                [   'role_id' => $role->id,
                    'ability_id' => rand(1, $abilities)
                ],
                [   'role_id' => $role->id,
                    'ability_id' => rand(1, $abilities)
                ],
                [   'role_id' => $role->id,
                    'ability_id' => rand(1, $abilities)
                ],
            ]);
        }

        $organizations = Organization::factory()->count(3)->create();

        $organizations->each(function ($organization) {
            $clients = Client::factory()
                ->for($organization)
                ->count(3)
                ->create();

            $clients->each(function ($client) {
                $projects = Project::factory()
                    ->for($client)
                    ->count(3)
                    ->create();

                $projects->each(function ($project) {
                    $tasks = Task::factory()
                        ->for($project)
                        ->count(3)
                        ->create();
                });
            });
        });
    }
}
