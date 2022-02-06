<?php

namespace Database\Factories;

use App\Models\StudentClass;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = StudentClass::class;

    public function definition()
    {
        return [
            'class_name' => $this->faker->name,
        ];
    }
}
