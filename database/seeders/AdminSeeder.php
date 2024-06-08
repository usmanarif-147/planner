<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'photo' => null,
                'password' => bcrypt('11223344'),
            ],
        ];

        foreach ($admins as $admin) {
            User::create($admin);
        }
    }
}
