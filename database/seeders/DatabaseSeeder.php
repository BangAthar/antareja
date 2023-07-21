<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
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
        // Menggunakan factory untuk membuat beberapa data pengguna
        // User::factory()->count(10)->create();
        User::factory()->count(10)->create();
        // Menambahkan pengguna khusus
        User::create([
            'name' => 'tegar dito',
            'email' => 'tegar@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);
    }
}
