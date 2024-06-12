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
            ['id'=> 1,'name'=> 'HP', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['id'=> 2,'name'=> 'OKI', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['id'=> 3,'name'=> 'CANON', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['id'=> 4,'name'=> 'EPSON', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['id'=> 5,'name'=> 'BROTHER', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['id'=> 6,'name'=> 'MSI', 'visible'=> true, 'status'=> true, 'created_at'=> now(), 'updated_at'=> now()],
            ['id'=>	7	,'name'=> 'LOGITECH',	'visible'=> true,	'status'=> true	,'created_at'=> now(),	'updated_at'=> now()],	
            ['id'=>	8	,'name'=> 'RAZER',	'visible'=> true	,'status'=> true	,'created_at'=> now(), 	'updated_at'=> now()]	,
            ['id'=>	9	,'name'=> 'JBL'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	10	,'name'=> 'AIRBOM'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	11	,'name'=> 'iBLUE'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	12	,'name'=> 'Ninebot'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	13	,'name'=> 'LENOVO'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	14	,'name'=> 'XEROX'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()],	
            ['id'=>	15	,'name'=> 'HYPERX'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()],	
            ['id'=>	16	,'name'=> 'AOC'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	17	,'name'=> 'CYBERTEL'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	18	,'name'=> 'ASUS'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	19	,'name'=> 'MICRONICS'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()],	
            ['id'=>	20	,'name'=> 'GENIUS'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()],	
            ['id'=>	21	,'name'=> 'SONY'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()],	
            ['id'=>	22	,'name'=> 'TEROS'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()],	
            ['id'=>	23	,'name'=> 'RICOH'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()],	
            ['id'=>	24	,'name'=> 'LOPEN'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()],	
            ['id'=>	25	,'name'=> 'DELL'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	26	,'name'=> 'AORUS'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()],	
            ['id'=>	27	,'name'=> 'PLAYPRO'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	28	,'name'=> 'ANTRYX'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	29	,'name'=> 'KYOCERA'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	30	,'name'=> 'LEXMARK'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	31	,'name'=> 'SAMSUNG'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	32	,'name'=> 'ENKORE'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	33	,'name'=> 'REDRAGON'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()],	
            ['id'=>	34	,'name'=> 'KONICA MINOLTA'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,
            ['id'=>	35	,'name'=> 'HALION'	,'visible'=> true	,'status'=> true	,'created_at'=> now()	,'updated_at'=> now()]	,

        ]);
    }
}
