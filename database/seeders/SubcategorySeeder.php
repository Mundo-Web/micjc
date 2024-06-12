<?php

namespace Database\Seeders;

use App\Models\SubCategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SubCategoria::insert([
            ['id'=> 1,'name'=> 'Tinta para Impresoras', 'categoria_id' => 1],
            ['id'=> 2,'name'=> 'Toner para Impresoras', 'categoria_id' =>1 ],
            ['id'=> 3,'name'=> 'Cabezal para Impresoras', 'categoria_id' => 1],
            ['id'=> 4,'name'=> 'Tambor para Impresoras', 'categoria_id' => 1],
            ['id'=> 5,'name'=> 'Drum para Impresoras', 'categoria_id' => 1],
            ['id'=> 6,'name'=> 'Cinta para Impresoras', 'categoria_id' => 1],
            ['id'=> 7,'name'=> 'Unidad de Imagen', 'categoria_id' => 1],
            ['id'=> 8,'name'=> 'Kit de mantenimiento', 'categoria_id' => 1],
            ['id'=> 9,'name'=> 'Impresoras a Tinta', 'categoria_id' => 2],
            ['id'=> 10,'name'=> 'Impresoras Laser Multifuncional', 'categoria_id' => 2],
            ['id'=> 11,'name'=> 'Impresoras Fotograficas', 'categoria_id' => 2],
            ['id'=> 12,'name'=> 'Impresoras Matriciales', 'categoria_id' => 2],
            ['id'=> 13,'name'=> 'Impresoras Sublimacion', 'categoria_id' => 2],
            ['id'=> 14,'name'=> 'Impresoras Termicas ', 'categoria_id' => 2],
            ['id'=> 15,'name'=> 'Impresoras Etiqueteras', 'categoria_id' => 2],
            ['id'=> 16,'name'=> 'Monitor 18.5 / 20 ', 'categoria_id' => 3],
            ['id'=> 17,'name'=> 'Monitor 21.5 / 23 ', 'categoria_id' => 3],
            ['id'=> 18,'name'=> 'Monitor 24 / 27 / 29 / 32', 'categoria_id' => 3],
            ['id'=> 19,'name'=> 'Monitor Curvo', 'categoria_id' => 3],
            ['id'=> 20,'name'=> 'Laptos', 'categoria_id' => 3],
            ['id'=> 21,'name'=> 'Laptos Gamer', 'categoria_id' => 3],
            ['id'=> 22,'name'=> 'Camaras Web', 'categoria_id' => 4],
            ['id'=> 23,'name'=> 'Teclado', 'categoria_id' => 4],
            ['id'=> 24,'name'=> 'Mouse', 'categoria_id' => 4],
            ['id'=> 25,'name'=> 'Kit Teclado y Mouse', 'categoria_id' => 4],
            ['id'=> 26,'name'=> 'Audifonos', 'categoria_id' => 4],
            ['id'=> 27,'name'=> 'Parlantes', 'categoria_id' => 4],
            ['id'=> 28,'name'=> 'Coolers', 'categoria_id' => 4],
            ['id'=> 29,'name'=> 'Pad Mouse', 'categoria_id' => 4],
            ['id'=> 30,'name'=> 'Scooter y Accesorios', 'categoria_id' => 4],
        ]);
    }
}
