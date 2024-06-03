<?php

namespace Database\Seeders;

use App\Models\Attributes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AtributosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attributes::create([
            'titulo' => 'Color',

            'status' => '1',
            'visible' => '1'
        ]);
    }
}
