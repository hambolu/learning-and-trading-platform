<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create 10 users and attach wallets to each user
        User::factory(10)->create()->each(function ($user) {
            $user->wallet()->save(Wallet::factory()->make());
        });
    }
}
