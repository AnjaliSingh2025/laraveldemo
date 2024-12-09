<?php

namespace Database\Factories;

use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    protected $model = Students::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'age' => $this->faker->numberBetween(18, 25),
            'detail' => implode(' ', $this->faker->words(10)), // Generates a string of 10 random words

        ];
    }
}
