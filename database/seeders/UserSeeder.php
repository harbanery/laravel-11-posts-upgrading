<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Raihan Yusuf',
            'username' => 'raihanyusuf',
            'email' => 'raihanyusuf@gmail.com',
            'password' => Hash::make('raihanyusuf'),
            'email_verified_at' => now(),
        ]);

        User::factory(5)->create();
    }
}
