<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(2)->create();

        // $users = User::all();
        // foreach ($users as $user) {
        //     for ($i = 0; $i < 20; $i++) {
        //         $user->create([
        //             'name' => fake()->name(),
        //             'email' => fake()->unique()->safeEmail(),
        //             'email_verified_at' => now(),
        //             'password' => Hash::make('123123123'),
        //             'role' => Arr::random(['user', 'viewer']),
        //             'created_by' => $user->id
        //         ]);
        //     }
        // }

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@dspss.com',
            'password' => Hash::make('123123123'),
            'role' => 'admin',
            'city' => City::where('name', 'Karachi')->first()->id
        ]);
    }
}
