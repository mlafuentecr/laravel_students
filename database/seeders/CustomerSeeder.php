<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // make seeder  for customer
        Customer::factory()
            ->count(1)
            ->hasClasses(3)
            ->create();
            Customer::factory()
            ->count(5)
            ->hasClasses(3)
            ->create();
    }
}
