<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        // Menambahkan pengguna khusus
        Team::create([
            'team_name' => 'panitiaadmin',
        ]);

        Team::factory(10)->create();

        User::create([
            'team_id' => '1',
            'name' => 'admin',
            'email' => 'noxvalpaok@gmail.com',
            'team_role' => 'ADMIN',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_activated' => '1',
        ]);

        User::factory(10)->create();
    }
}
