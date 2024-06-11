<?php

namespace App\Http\Controllers;

use App\Models\Langs;
use App\Models\politycsCondition;
use Illuminate\Http\Request;

class PoliticasdePrivacidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $politicas = politycsCondition::all();
        return view('pages.politicas_privacidad.index', compact('politicas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $langs = Langs::all();
        return view('pages.politicas_privacidad.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       
        politycsCondition::create($request->all());
        return redirect()->route('verPoliticasPrivacidad.index')->with('success', 'Publicación creado exitosamente.');

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
        $politicas = politycsCondition::find($id);
        return view('pages.politicas_privacidad.edit',compact('politicas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        politycsCondition::find($id)->update($request->all());
        return redirect()->route('verPoliticasPrivacidad.index')->with('success', 'Publicación creado exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function delete(Request $request){
        politycsCondition::find($request->id)->delete();

        return response()->json(['message'=> 'borrado correctamente']);
    }
}
