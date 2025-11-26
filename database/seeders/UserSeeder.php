<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123', // akan di-hash otomatis oleh cast di model
            'role' => 'admin',        // ✅ tambahkan role admin
        ]);
    }
}
