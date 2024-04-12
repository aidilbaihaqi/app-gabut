<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Mahasiswa;
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
        // User::factory(10)->create();

        User::create([
            'name' => 'Aidil Baihaqi',
            'email' => 'admin@umrah.ac.id',
            'password' => Hash::make('admin123')
        ]);

        Mahasiswa::factory()->count(101)->create();
    }
}
