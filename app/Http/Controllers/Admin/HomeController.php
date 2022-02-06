<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;


class HomeController
{
    public function index()
    {

        
        $countries = Country::all()->pluck('name', 'id')->toArray();


        $countryUsers = DB::table('users')
            ->whereNotNull('country_id')
            ->select('country_id', DB::raw('count(*) as total'))
            ->groupBy('country_id')
            ->get();


        $data = [];
        //dd($countryUsers);    ->where($value->country_id , 'id')->pluck('name');
        foreach ($countryUsers as $key => $value) {
            $data[$countries[$value->country_id]] = $value->total;
        }
        
        //sort array:
        arsort($data);
        //get top:
        $top_data = array_slice($data, 0, 10);



        $average_age = $this->avrageStudentsAge();
        

        //charts:
        $settings1 = [
            'chart_title'        => 'Number of Students',
            'chart_type'         => 'bar',
            'report_type'        => 'group_by_relationship',
            'model'              => 'App\Models\User',
            'group_by_field'     => 'name',
            'aggregate_function' => 'count',
            'filter_field'       => 'created_at',
            'column_class'       => 'w-full',
            'entries_number'     => '10',
            'relationship_name'  => 'country',
            'translation_key'    => 'user',
            'name'               => 'Users Per Country'
        ];

        $chart1 = new LaravelChart($settings1);

        $settings2 = [
            'chart_title'        => 'StudentsPerClass',
            'chart_type'         => 'bar',
            'report_type'        => 'group_by_relationship',
            'model'              => 'App\Models\User',
            'group_by_field'     => 'class_name',
            'aggregate_function' => 'count',
            'filter_field'       => 'created_at',
            'column_class'       => 'w-full',
            'entries_number'     => '5',
            'relationship_name'  => 'class',
            'translation_key'    => 'user',
        ];

        $chart2 = new LaravelChart($settings2);
        



        return view('admin.home', ['chart1' => $chart1 , 'top_data' => $top_data , 'chart2' => $chart2 , 'average_age' => $average_age ]);
    }


    // if needed: || role 2 is : student!
    public function changeRole()
    {

        $users = User::all();

        foreach ($users as $user) {
            if (!($user->email == 'admin@admin.com')) {
                $user->roles()->sync(2);
            } else {
            }
        }
    }

    //to get the avrg:
    public function avrageStudentsAge()
    {

        $students = User::whereHas('roles', function($role) {
            $role->where('title', '=', 'Student');
        })->get();

        return $students->average(function ($student) {
            return $student->age;
        });
       
    }
}
