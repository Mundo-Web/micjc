<?php

namespace App\Http\Controllers;

use App\Models\SaleDetail;
use Illuminate\Http\Request;

class SaleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function bySale(Request $request, string $sale)
    {
        $details = SaleDetail::select('sale_details.*' , 'sales.doc_number' )->join('sales', 'sale_details.sale_id', '=', 'sales.id')->where('sale_id', $sale)->get();
        return $details;
    }

}
