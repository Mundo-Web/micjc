<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Marca::insert([
            ['name'=> 'HP', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'OKI', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'CANON', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'EPSON', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'BROTHER', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'MSI', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'LENOVO', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'LOGITECH', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'RAZER', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'JBL', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'AIRBOM', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'iBLUE', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'Ninebot', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'XEROX', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'ESPON', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'AOC', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'LONOVO', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'ASUS', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'MICRONICS', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'GENIUS', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'SONY', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'TEROS', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'RICOH', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'LOPEN', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'DELL', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'AORUS', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'PLAYPRO', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'ANTRYX', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'KYOCERA', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'LEXMARK', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'SAMSUNG', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'ENKORE', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'REDRAGON', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'KONICA MINOLTA', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'CYBERTEL', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['name'=> 'HYPERX', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
           
        ]);
    }
}
