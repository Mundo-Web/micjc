<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cat = ['Tintas y cartuchos', 'Impresoras', 'Laptos y Monitores', 'Accesorios y Perifericos'];
        for ($i = 0; $i < 4; $i++) {
            Category::create([
                'name' => $cat[$i],
                'description' => 'Aquí va la descripción de la categoria '.$cat[$i],
                'status' => 1,
                'visible' => 1,
            ]);
        }
    }
}
