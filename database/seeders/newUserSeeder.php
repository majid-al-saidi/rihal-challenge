<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class newUserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id' => '980',
                'name' => 'Tara Fadel',
                'email' => 'gziemannewww@example.org',
                'email_verified_at' => '2022-01-15 13:51:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'F5cLQdHScU',
                'locale' => NULL,
                'created_at' => '2022-01-15 13:51:43',
                'updated_at' => '2022-01-15 13:51:43',
                'deleted_at' => NULL,
                'class_id' => '4',
                'country_id' => '63',
            ],
            
        ];

        User::insert($users);
        
    }
}