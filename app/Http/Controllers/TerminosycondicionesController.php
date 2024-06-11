<?php

namespace App\Http\Controllers;

use App\Models\Langs;
use App\Models\termsCondition;
use Illuminate\Http\Request;

class TerminosycondicionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $terminos = termsCondition::all();
        return view('pages.termscondition.index',compact('terminos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $langs = Langs::all();
        return view('pages.termscondition.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        termsCondition::create($request->all());
        return redirect()->route('terminoscondiciones.index')->with('success', 'Publicación creado exitosamente.');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $terminos = termsCondition::find($id);
        return view('pages.termscondition.edit', compact('terminos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        try {
            
            termsCondition::find($id)->update($request->all());
            return redirect()->route('terminoscondiciones.index')->with('success', 'Publicación creado exitosamente.');
        } catch (\Throwable $th) {
            //throw $th;
            
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    
    }

    public function delete(Request $request){
        termsCondition::find($request->id)->delete();

        return response()->json(['message'=> 'borrado correctamente']);
    }
}
