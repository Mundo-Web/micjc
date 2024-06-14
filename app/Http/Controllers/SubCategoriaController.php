<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Marca;
use App\Models\SubCategoria;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $subCategorias = SubCategoria::all() ;
        return view('pages.subCategorias.index', compact('subCategorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorias = Category::all();
        $marcas = Marca::all();
        return view('pages.subCategorias.create', compact('categorias', 'marcas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $MarcasSelected = $request->input('marcas_id');

        
        $data = $request->except('_token');

        $subcat = SubCategoria::create($data);
        $subcat->marcas()->sync($MarcasSelected);

       
        return redirect()->route('subcategoria.index')->with('success', 'Producto creado exitosamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategoria $subCategoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
       $subCategoria  = SubCategoria::find($id);
       $allMarcas = Marca::all();
        return view('pages.subCategorias.edit', compact('subCategoria','allMarcas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $subCategoria  = SubCategoria::find($id)->update($request->all());
        $subCategoria  = SubCategoria::find($id);
        $subCategoria->marcas()->sync($request->input('marcas_id'));
       return redirect()->route('subcategoria.index')->with('success', 'Producto actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategoria $subCategoria)
    {
        //
    }
    public function deleteSubCategory(Request $request){
        SubCategoria::find($request -> id)->delete();
    }

    public function obtener(Request $request)  {
        

        $subCategoria = SubCategoria::where('status', 1)->where('visible', 1)->where('categoria_id',$request->id )->get();
        return response()->json(['message' => 'obteniendo categorias' , 'subCategoria'=> $subCategoria]);
    }
    public function obtenerD(Request $request)  {
        

      

        $subCategoria = SubCategoria::join('products', 'products.sub_cat_id', '=', 'sub_categorias.id')
        ->select('sub_categorias.id', 'sub_categorias.name')
        
         ->where('products.categoria_id', '=', $request->id )
        ->distinct()->get();
        
        return response()->json(['message' => 'obteniendo categorias' , 'subCategoria'=> $subCategoria]);
    }
}
