<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Administration;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

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
                'role' => 'admin',
                'created_at' => now(),
            ],
            [
                'id' => User::generateUid(),
                'username' => 'operator',
                'name' => 'Operator',
                'email' => 'operator@gmail.com',
                'password' => Hash::make('operator1234'),
                'role' => 'operator',
                'created_at' => now(),
            ],
        ])->each(function ($user) {
            DB::table('users')->insert($user);
        });

        Schema::disableForeignKeyConstraints();
        Administration::truncate();
        Schema::enableForeignKeyConstraints();

        collect([
            [
                // 'id_kelurahan' => Administration::generateUid(),
                'id_kelurahan' => 'ahfwivnmce0ws8ck',
                'kelurahan' => 'Cipadung Kidul',
                'kecamatan' => 'Panyileukan',
                'kota' => 'Bandung',
                'created_at' => now(),

            ],
        ])->each(function ($datas) {
            DB::table('administrations')->insert($datas);
        });
    }
}
