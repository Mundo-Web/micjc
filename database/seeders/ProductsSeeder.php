<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Marca;
use App\Models\Products;
use App\Models\Specifications;
use App\Models\SubCategoria as SubCategory;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use SoDe\Extend\File;
use SoDe\Extend\Text;


class ProductsSeeder extends Seeder
{
    use Importable;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Specifications::where('status', true)->delete();
        Products::where('status', true)->delete();
        Excel::import(new class implements ToModel
        {
            public function model(array $row)
            {
                if (!is_numeric($row[0])) return null;

                $category = Category::updateOrCreate(['id' => $row[2]], [
                    'id' => $row[2],
                    'name' => $row[1],
                    'slug' => str_replace(' ', '-', strtolower($row[1])),
                    'url_image' => 'images/img/',
                    'name_image' => 'noimagen.jpg'
                ]);

                if ($row[3] == '') $subcategory = new SubCategory();
                else {
                    $subcategory = SubCategory::updateOrCreate(['name' => $row[3]], [
                        'categoria_id' => $category->id,
                        'name' => $row[3],
                        'status' => true,
                        'visible' => true
                    ]);
                }

                try {
                    if ($row[4] == '') $brand = new Marca();
                    else {
                        $brand = Marca::updateOrCreate(['name' => $row[4]], [
                            'name' => $row[4],
                            'status' => true,
                            'visible' => true
                        ]);
                    }
                } catch (\Throwable $th) {
                }

                $price = Text::keep($row[8] ?? '', '0123456789.');
                $discount = Text::keep($row[9] ?? '', '0123456789.');

                $product = Products::updateOrCreate(['sku' => $row[0]], [
                    'categoria_id' => $category->id,
                    'sub_cat_id' => $subcategory->id,
                    'marca_id' => $brand->id,
                    'sku' => $row[0],
                    'producto' => $row[5],
                    'extract' => $row[6],
                    'description' => $row[7],
                    'descuento' => $discount ? $discount : 0,
                    'precio' => $price ? $price : 0,
                    'stock' => is_numeric($row[11]) ? $row[11] : 0,
                    'imagen' => 'images/img/noimagen.jpg',
                    'status' => true,
                    'visible' => true
                ]);

                // $path2search = "public/storage/images/seeds/{$category->id}/";

                // $images = [];
                // try {
                //     $images = File::scan($path2search, [
                //         'type' => 'file',
                //         'startsWith' => $product->sku,
                //         'desc' => true
                //     ]);
                // } catch (\Throwable $th) {
                // }

                // foreach ($images as $key => $image_name) {
                //     $image = "storage/images/seeds/{$category->id}/{$image_name}";
                //     if ($key == 0) $product->imagen = $image;
                // }
                $product->imagen = "storage/images/seeds/{$category->id}/{$product->sku}.png";
                $product->save();

                if (Text::nullOrEmpty($row[10])) return;
                try {
                    Specifications::where('product_id', $product->id)->delete();
                    $specs = \explode('/', $row[10]);
                    foreach ($specs as $value) {
                        [$tittle, $specifications] = \explode(':', $value);
                        $jpa = new Specifications();
                        $jpa->product_id = $product->id;
                        $jpa->tittle = $tittle;
                        $jpa->specifications = $specifications;
                        $jpa->save();
                    }
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }, 'storage/app/utils/Products.xlsx');
    }
}
