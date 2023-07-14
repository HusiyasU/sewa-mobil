<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::Create([
            'name' => 'iyas',
            'email' => 'iyas@example.com',
            'password' => bcrypt('123'),
            'is_admin' => 1,
        ]);
    }
}
