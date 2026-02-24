<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit::create([
            'name' => 'Unit 1',
            'type' => 'PS3',
            'price_per_hour' => 5000,
        ]);

        Unit::create([
            'name' => 'Unit 2',
            'type' => 'PS3',
            'price_per_hour' => 5000,
        ]);

        Unit::create([
            'name' => 'Unit 3',
            'type' => 'PS4',
            'price_per_hour' => 7000,
        ]);
    }
}
