<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'date_of_birth' => $this->faker->dateTimeBetween('-45 years','-18 years'),
            'class_id' => $this->faker->unique()->numberBetween(1, 20),
            'country_id' => $this->faker->unique(true)->numberBetween(1, 247),
            'password' => bcrypt($this->faker->password),
            'remember_token' => Str::random(10),
        ];
    }

    
}
