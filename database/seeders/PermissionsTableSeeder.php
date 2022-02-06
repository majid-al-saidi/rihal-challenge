<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'system_setting_access',
            ],
            [
                'id'    => 19,
                'title' => 'student_class_create',
            ],
            [
                'id'    => 20,
                'title' => 'student_class_edit',
            ],
            [
                'id'    => 21,
                'title' => 'student_class_show',
            ],
            [
                'id'    => 22,
                'title' => 'student_class_delete',
            ],
            [
                'id'    => 23,
                'title' => 'student_class_access',
            ],
            [
                'id'    => 24,
                'title' => 'country_create',
            ],
            [
                'id'    => 25,
                'title' => 'country_edit',
            ],
            [
                'id'    => 26,
                'title' => 'country_show',
            ],
            [
                'id'    => 27,
                'title' => 'country_delete',
            ],
            [
                'id'    => 28,
                'title' => 'country_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
