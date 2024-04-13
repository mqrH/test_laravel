<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;
    public function definition(): array
    {
        return [
            'name'    => fake()->name,
            'age'     => mt_rand(16, 90),
            'country' => fake()->country,
        ];
    }
}
