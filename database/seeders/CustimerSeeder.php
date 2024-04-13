<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class CustimerSeeder extends Seeder
{
    public function run(): void
    {
        Customer::factory()->count(50)->create();
    }
}
