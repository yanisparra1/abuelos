<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear usuario administrador
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'), // Cambia 'password' por la contraseña que desees
            'email_verified_at' => now(),
        ]);

        // Opcional: crear más usuarios si es necesario
        // User::create([...]);
    }
}