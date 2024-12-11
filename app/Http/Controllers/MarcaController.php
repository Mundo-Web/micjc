<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $marcas = Marca::where('status' , '=' , true)->get();
        return view('pages.marcas.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.marcas.create');
    }


    public function saveImg($file, $route, $nombreImagen)
    {
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file);
        $img->coverDown(160, 40, 'center'); /* recorte de imageness ->avisar */

        if (!file_exists($route)) {
            mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
        }

        $img->save($route . $nombreImagen);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $marca = new Marca();

        if ($request->hasFile('description')) {
            $file = $request->file('description');
            $routeImg = 'storage/images/marcas/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
            $this->saveImg($file, $routeImg, $nombreImagen);

            $marca->description = $routeImg . $nombreImagen;
        }

        $marca->name = $request->name;
        $marca->status = 1;
        $marca->visible = 1;

        $marca->save();

        return redirect()->route('marcas.index')->with('success', 'Publicación creado exitosamente.');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Marca $marca)
    {
        //
    }
    public function obtener(Request $request){

        $marcas = DB::select('SELECT
                marcas.* 
            FROM
                subcategories_x_marcas
                INNER JOIN marcas ON subcategories_x_marcas.marca_id = marcas.id 
            WHERE
                subcat_id = ?',
        [$request->id]);
        return response()->json(['marcas'=>$marcas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        //
        $marca = Marca::find($id);
        return view('pages.marcas.edit',compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
       // Buscar la marca
        $marca = Marca::find($id);

        if (!$marca) {
            return redirect()->route('marcas.index')->with('error', 'Marca no encontrada.');
        }

        // Actualizar imagen si se subió una nueva
        if ($request->hasFile('description')) {
            $file = $request->file('description');
            $routeImg = 'storage/images/marcas/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

            // Guardar la nueva imagen
            $this->saveImg($file, $routeImg, $nombreImagen);

            // Eliminar la imagen anterior si existe
            if ($marca->description && file_exists(public_path($marca->description))) {
                unlink(public_path($marca->description));
            }

            $marca->description = $routeImg . $nombreImagen;
        }

        // Actualizar el nombre de la marca
        $marca->name = $request->name;

        // Guardar cambios
        $marca->save();

        return redirect()->route('marcas.index')->with('success', 'Marca actualizada exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marca $marca)
    {
        //
    }

    public function deleteMarca(Request $request)
    {
        $id = $request->id;
       
        $category = Marca::findOrfail($id); 
       
        $category->status = false;
       
        $category->save();

        return response()->json(['message' => 'Categoría eliminada']);
    }
    public function updateVisible(Request $request)
    {
      $id = $request->id;
      $field = $request->field;
      $status = $request->status;
  
      // Verificar si el producto existe
      $product = Marca::find($id);
  
      if (!$product) {
        return response()->json(['message' => 'Producto no encontrado'], 404);
      }
  
      // Actualizar el campo dinámicamente
      $product->update([
        $field => $status
      ]);
      return response()->json(['message' => 'registro actualizado']);
    }

    public function marcaDependiente(Request $request){
        $selectMarcas = Marca::join('products', 'products.marca_id', '=', 'marcas.id')
        ->select('marcas.id', 'marcas.name')
        
         ->where('products.sub_cat_id', '=', $request->id )
        ->distinct()->get();

        return response()->json(['message' => 'obteniendo categorias' , 'selectMarcas'=> $selectMarcas]);

    }
}
