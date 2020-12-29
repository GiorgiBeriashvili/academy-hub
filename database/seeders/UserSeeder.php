<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->firstOrCreate([
            'username' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@academy.hub',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::query()->firstOrCreate([
            'username' => 'User',
            'role' => 'user',
            'email' => 'user@academy.hub',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Auth::attempt(User::query()->find(1)->only(['email', 'password']));
//        Auth::attempt(User::query()->find(2)->only(['email', 'password']));

        UserFactory::times(5)->create();
    }
}
