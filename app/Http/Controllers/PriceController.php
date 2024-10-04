<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePriceRequest;
use App\Http\Requests\UpdatePriceRequest;
use App\Models\Department;
use App\Models\District;
use App\Models\Price;
use App\Models\Province;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $precios = Price::where("status", "=", true)->get();

        $departamentos = DB::table('departments')->get();
        $provincias = DB::table('provinces')->get();
        $distritos = DB::table('districts')->get();

        return view('pages.prices.index', compact('precios', 'departamentos', 'provincias', 'distritos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function save(Request $request, $priceId = 0)
    {
        $price = Price::with(['district', 'district.province', 'district.province.department'])->find($priceId);
        if (!$price) {
            $price = new Price();
            $price->district = new District();
            $price->district->province = new Province();
            $price->district->province->department = new Department();
        }

        $departments = Department::all();
        if ($price) {
            $provinces = Province::where('department_id', $price->district->province->department->id)->get();
            $districts = District::where('province_id', $price->district->province->id)->get();
        }
        return view('pages.prices.save')
            ->with('departments', $departments)
            ->with('provinces', $provinces ?? [])
            ->with('districts', $districts ?? [])
            ->with('price', $price);
    }

    public function getProvincias(Request $request)
    {
        //
        //traemos las provincias de la tabla

        // $provincias = DB::table('provinces')
        //     ->where('department_id', '=', $request->id)
        //     ->get();

        $provinces = Price::select([
            'provinces.id AS id',
            'provinces.description AS description',
            'provinces.department_id AS department_id'
        ])
            ->join('districts', 'districts.id', 'prices.distrito_id')
            ->join('provinces', 'provinces.id', 'districts.province_id')
            ->where('provinces.active', 1)
            ->where('provinces.department_id', '=', $request->id)
            ->groupBy('id', 'description', 'department_id')
            ->get();

        return response()->json($provinces);
    }

    public function getDistrito(Request $request)
    {
        //
        //traemos las provincias de la tabla

        // $distritos = DB::table('districts')
        //     ->where('province_id', '=', $request->id)
        //     ->get();

        $districts = Price::select([
            'districts.id AS id',
            'districts.description AS description',
            'districts.province_id AS province_id',
            'prices.id AS price_id',
            'prices.price AS price'
        ])
            ->join('districts', 'districts.id', 'prices.distrito_id')
            ->where('districts.active', 1)
            ->where('districts.province_id', '=', $request->id)
            ->groupBy('id', 'description', 'province_id', 'price', 'price_id')
            ->get();

        return response()->json($districts);
    }
    public function calculeEnvio(Request $request)
    {

        $LocalidadParaEnvio = Price::where('distrito_id', $request->id)->where("status", true)->get();
        return response()->json(['message' => 'LLegando Correctamente', 'LocalidadParaEnvio' => $LocalidadParaEnvio]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'price' => 'required'
        ]);
        $price = new Price();

        $price->distrito_id = $request->distrito_id;
        $price->price = $request->price;
        $price->status = 1;
        $price->visble = 1;

        //preguntamos si es lima o no ID=15
        if ($request->departamento_id == 15) {
            if ($request->provincia_id == 1501) {
                $price->local = 1;
            } else {
                $price->local = 0;
            }
        }

        $price->save();

        return redirect()->route('prices.index')->with('success', 'Servicio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Price $price)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePriceRequest $request, Price $price)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function deletePrice(Request $request)
    {
        $price = Price::find($request->id);
        $price->status = 0;
        $price->save();
        return response()->json(['message' => 'Precio eliminado correctamente']);
    }
}
