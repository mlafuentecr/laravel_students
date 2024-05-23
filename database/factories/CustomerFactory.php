<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //if pay day is less than start date, then payment status is overdue
        $start_date = $this->faker->date();
        $pay_day = $this->faker->randomElement([29, 15]);
        $date = date('d');
        $payment_status = $pay_day < $date ? 'overdue' : 'paid';
        
        return [
            'start_date' => $start_date,
            'payment_status' => $payment_status,
            'pay_day' => $pay_day, 
            'name' => $this->faker->name(),
            'customer_id' => $this->faker->unique()->randomNumber(1) . '-' . sprintf('%04d', $this->faker->unique()->randomNumber(4)) . '-' . sprintf('%04d', $this->faker->unique()->randomNumber(4)),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state()
        ];
    }
}
