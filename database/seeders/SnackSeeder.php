<?php

namespace Database\Seeders;

use App\Models\Snack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SnackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Snack::create([
            'name' => 'Aqua Gelas',
            'price' => 1000,
            'stock' => 50
        ]);

        Snack::create([
            'name' => 'Pop Mie',
            'price' => 8000,
            'stock' => 20
        ]);

        Snack::create([
            'name' => 'Golda',
            'price' => 4000,
            'stock' => 20
        ]);
    }
}
