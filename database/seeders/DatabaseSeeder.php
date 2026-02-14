<?php

namespace Database\Seeders;

use App\Models\User;
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Keysha Alea',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);
        User::create([
            'name' => 'Keysha Alea',
            'email' => 'admin@gmail.com',
            'status' => 'mahasiswa',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);
        User::create([
            'name' => 'Tono',
            'email' => 'tono@gmail.com',
            'status' => 'Dosen',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);
        User::create([
            'name' => 'Dani',
            'email' => 'dani@gmail.com',
            'status' => 'Admin',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

    }
}
