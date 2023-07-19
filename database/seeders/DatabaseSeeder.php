<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::truncate();
        collect([
            [
                'id' => User::generateUid(),
                'username' => 'admin',
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin1234'),
                'role' => 1,
            ],
            [
                'id' => User::generateUid(),
                'username' => 'operator',
                'name' => 'Operator',
                'email' => 'operator@gmail.com',
                'password' => Hash::make('operator1234'),
                'role' => 2,
            ],
        ])->each(function ($user) {
            DB::table('users')->insert($user);
        });
    }
}
