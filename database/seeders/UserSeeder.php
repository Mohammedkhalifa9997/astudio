<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::create([
            'first_name' => 'Mohammed',
            'last_name' => 'Elkhalifa',
            'email' => 'mohammedayman9770@gmail.com',
            'password' => '123456789',
        ]);

        $user2 = User::create([
            'first_name' => 'Mohammed',
            'last_name' => 'Ayman',
            'email' => 'mohammedayman9777@gmail.com',
            'password' => '123456789',
        ]);

        cache()->put('user1', $user1->id);
        cache()->put('user2', $user2->id);
    }
}
