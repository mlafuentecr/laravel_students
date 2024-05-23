<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classes>
 */
class ClassesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $classOptions  = ['Salsa On One', 'Salsa on Two', 'Bolerp', 'Bachata N1', 'Bolero criollo', 'Movimiento', 'bachata N3'];
        $classTeacherOptions = ['Criss', 'Andy', 'Ingrid', 'Ariel', 'Luis', 'Ana', 'Carlos'];
        $randomClassIndex = array_rand($classOptions);
        $randomTeacherIndex = array_rand($classTeacherOptions);
        return [
            //
            'class_name' => $classOptions[$randomClassIndex],
            'class_code' => $this->faker->unique()->randomNumber(8),
            'class_description' => $this->faker->text(),
            'class_teacher' => $classTeacherOptions[$randomTeacherIndex],
            'class_time' => $this->faker->time(),
            'class_day' => $this->faker->dayOfWeek()

        ];
    }
}
