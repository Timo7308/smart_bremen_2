<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Ensure the User model is correctly imported

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Create an Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('securepassword'), // Replace with a strong password
            // 'is_admin' => true, // Uncomment if you have an 'is_admin' column
        ]);

        // Create Regular Users
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password123'), // Replace with a strong password
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'password' => Hash::make('password123'), // Replace with a strong password
        ]);

        // Optionally, create more users using a loop
        // for ($i = 1; $i <= 5; $i++) {
        //     User::create([
        //         'name' => "User $i",
        //         'email' => "user$i@example.com",
        //         'password' => Hash::make('password123'),
        //     ]);
        // }
    }
}
