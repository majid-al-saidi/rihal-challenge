<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('student_classes')->delete();
        
        \DB::table('student_classes')->insert(array (
            0 => 
            array (
                'id' => '1',
                'class_name' => 'Introduction to Computer Science',
                'created_at' => '2022-01-15 13:23:55',
                'updated_at' => '2022-01-15 13:23:55',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => '2',
                'class_name' => 'Problem Solving and Programming',
                'created_at' => '2022-01-15 13:23:56',
                'updated_at' => '2022-01-15 13:23:56',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => '3',
                'class_name' => 'Object Oriented Programming',
                'created_at' => '2022-01-15 13:23:56',
                'updated_at' => '2022-01-15 13:23:56',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => '4',
                'class_name' => 'Introduction to Java',
                'created_at' => '2022-01-15 13:23:56',
                'updated_at' => '2022-01-15 13:23:56',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => '5',
                'class_name' => 'Introduction to Web Computing',
                'created_at' => '2022-01-15 13:23:56',
                'updated_at' => '2022-01-15 13:23:56',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => '6',
                'class_name' => 'Principles of Web Applications',
                'created_at' => '2022-01-15 13:23:56',
                'updated_at' => '2022-01-15 13:23:56',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => '7',
                'class_name' => 'Software Testing',
                'created_at' => '2022-01-15 13:23:56',
                'updated_at' => '2022-01-15 13:23:56',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => '8',
                'class_name' => 'Fundamentals of Operating Systems',
                'created_at' => '2022-01-15 13:23:56',
                'updated_at' => '2022-01-15 13:23:56',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => '9',
                'class_name' => 'Software Project Management',
                'created_at' => '2022-01-15 13:23:56',
                'updated_at' => '2022-01-15 13:23:56',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => '10',
                'class_name' => 'Digital Image Processing',
                'created_at' => '2022-01-15 13:23:56',
                'updated_at' => '2022-01-15 13:23:56',
                'deleted_at' => NULL,
            )
        ));
        
        
    }
}