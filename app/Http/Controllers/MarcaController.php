<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Marca::create($request->all());
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
        //
        $marca = Marca::find($id)->update($request->all());
        

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
}
