<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Role::factory()->create([
            'name' => 'Administrator',
            'description' => 'test@example.com',
        ]);
        \App\Models\Role::factory()->create([
            'name' => 'Manager',
            'description' => 'test@example.com',
        ]);
        \App\Models\Role::factory()->create([
            'name' => 'Client',
            'description' => 'test@example.com',
        ]);

        \App\Models\User::factory(100)->create();
        \App\Models\userdetail::factory(100)->create();
        \App\Models\friend::factory(100)->create();
        \App\Models\follower::factory(100)->create();
        \App\Models\block::factory(100)->create();
        \App\Models\conversation::factory(100)->create();
        \App\Models\message::factory(100)->create();
        \App\Models\post::factory(100)->create();
        \App\Models\like::factory(100)->create();
        \App\Models\share::factory(100)->create();
        \App\Models\follower::factory(100)->create();
        \App\Models\comment::factory(100)->create();
        \App\Models\notification::factory(100)->create();

    }
}
