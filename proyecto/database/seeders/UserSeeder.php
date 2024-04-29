<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate(); // Vacía la tabla y reinicia el autoincremento

        User::create([
            'name' => 'Carlos Morales',
            'email' => 'Carlos@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Mariana Roman',
            'email' => 'Mariana@gmail.com',
            'password' => bcrypt('12MarianaR'),
            'role' => 'cajera',
        ]);

        User::create([
            'name' => 'Veronica Gamboa',
            'email' => 'Veronica@gmail.com',
            'password' => bcrypt('Vero147'),
            'role' => 'vendedor',
        ]);
    }
}
