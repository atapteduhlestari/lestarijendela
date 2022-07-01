<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =  [
            [
                'name'  => 'Roofie',
                'email' => 'admin@example.com',
                'username' => 'admin',
                'password' => Hash::make('password'),
                'created_at' => now(),
            ],
            [
                'name'  => 'Tri Wahyuni',
                'email' => 'superadmin@example.com',
                'username' => 'superadmin',
                'password' => Hash::make('password'),
                'created_at' => now(),
            ],
        ];
        User::insert($data);
    }
}
