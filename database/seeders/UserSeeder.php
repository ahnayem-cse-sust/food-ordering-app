<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@iosoup.com',
            'password' => '123',
            'usertype' => 'STDN',
        ]);
    }
}
