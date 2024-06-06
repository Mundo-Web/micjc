<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        return view('pages.subCategorias.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $data = $request->except('_token');

        SubCategoria::create($data);

       
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
        return view('pages.subCategorias.edit', compact('subCategoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $subCategoria  = SubCategoria::find($id)->update($request->all());
       return redirect()->route('subcategoria.index')->with('success', 'Producto actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategoria $subCategoria)
    {
        //
    }

    public function obtener(Request $request)  {
        

        $subCategoria = SubCategoria::where('status', 1)->where('visible', 1)->where('categoria_id',$request->id )->get();
        return response()->json(['message' => 'obteniendo categorias' , 'subCategoria'=> $subCategoria]);
    }
}
