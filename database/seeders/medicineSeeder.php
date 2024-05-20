<?php

namespace Database\Seeders;

use Illuminate\models\medicine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class medicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\medicine::factory(5)->create();
        //
    }
}
