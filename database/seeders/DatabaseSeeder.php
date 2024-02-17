<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        //roles
        \App\Models\Role::query()->create([
            'name' => 'admin',
        ]);
        \App\Models\Role::query()->create([
            'name' => 'user',
        ]);

         \App\Models\User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@admin.kz',
             'password' =>Hash::make('secret_password'),
         ]);

    }
}
