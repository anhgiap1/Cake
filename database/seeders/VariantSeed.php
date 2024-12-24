<?php

namespace Database\Seeders;

use App\Models\variants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VariantSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        variants::factory()->count(5)->create();
    }
}
