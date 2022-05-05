<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class Students extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(100)->create();
    }
}
