<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'name' => $this->faker->name(),
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),

            'id_number'=> $this->faker->unique()->text(10),
            'firstname'=> $this->faker->firstname(),
            'lastname'=> $this->faker->lastname(),
            'birthdate'=> $this->faker->date(),
            'address'=> $this->faker->text(30),
            'year_level'=> $this->faker->numberBetween(1,4),
            'course'=> $this->faker->text(5),
            'middlename'=> $this->faker->name(),
        ];
    }
}
