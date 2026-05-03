<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Membuat akun Administrator (Panitia PSB)
        User::create([
            'name' => 'Administrator PSB',
            'email' => 'admin@bustanulwildan.com',
            'no_wa' => '080000000000', // Nomor dummy khusus admin
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // 2. Membuat akun Wali Santri (Untuk keperluan uji coba/testing)
        User::create([
            'name' => 'Ahmad Sulaiman',
            'email' => 'wali@email.com',
            'no_wa' => '81234567890',
            'password' => Hash::make('password123'),
            'role' => 'wali_santri',
        ]);
    }
}