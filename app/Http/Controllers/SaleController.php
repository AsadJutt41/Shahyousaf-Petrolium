<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Fuel;
use App\Models\RemaningStock;
use App\Models\Stock;

class SaleController extends Controller
{
    public function index()
    {
        $petrolType = Fuel::all();
        $sales = Sale::with('fuel')->get();
        return view('sale.list', compact('petrolType', 'sales'));
    }
    public function addSale()
    {
        $petrolType = Fuel::all();
        return view('sale.add', compact('petrolType'));
    }
    public function saleStore(Request $request)
    {

        $stock = RemaningStock::where('petrol_type', $request->petrol_type)->latest()->first();
        if($stock == null){
            return back()->with('error', 'This Petrol Type is not available in stock');
        }
        $sumitRemainingStock = RemaningStock::where('petrol_type', $request->petrol_type)->sum('fuel_litter');
        if($request->fuel_litter > $sumitRemainingStock){
            return back()->with('error', 'Requested Petrol Litters is greate then Available Litters');
        }else{
            $valdate = $request->validate([
                'petrol_type' => ['required'],
                'fuel_litter' => ['required'],
                'per_litter_price' => ['required'],
            ]);

            $sale = new Sale();
            $sale->petrol_type = $request->petrol_type;
            $sale->fuel_litter = $request->fuel_litter;
            $sale->per_litter_price = $request->per_litter_price;
            $sale->total_price =$request->fuel_litter * $request->per_litter_price;
            $sale->save();

            $sumitRemainingStock = RemaningStock::where('petrol_type', $request->petrol_type)->latest()->first();
            $remaningStock = $sumitRemainingStock->fuel_litter - $request->fuel_litter;
            $sumitRemainingStock->fuel_litter = $remaningStock;
            $sumitRemainingStock->save();

            return redirect()->route('sale')->with('success', 'Sale Transaction has been added Successfully!');
        }
    }

    public function saleEdit($id)
    {
        $petrolType = Fuel::all();
        $sale = Sale::find($id);
        return view('sale.edit', compact('sale', 'petrolType'));
    }
    public function saleUpdate(Request $request, $id)
    {
        $stock = Stock::where('petrol_type', $request->petrol_type)->latest()->first();
        if($stock == null){
            return back()->with('error', 'This Petrol Type is not available in stock');
        }
        $sumitRemainingStock = RemaningStock::where('petrol_type', $request->petrol_type)->sum('fuel_litter');
        if($request->fuel_litter > $sumitRemainingStock){
            return back()->with('error', 'Requested Petrol Volume is greate then Current Volume');
        }else{
            $valdate = $request->validate([
                'petrol_type' => ['required'],
                'fuel_litter' => ['required'],
                'per_litter_price' => ['required'],
            ]);

            $sale = Sale::find($id);
            $sale->petrol_type = $request->petrol_type;
            $sale->fuel_litter = $request->fuel_litter;
            $sale->per_litter_price = $request->per_litter_price;
            $sale->total_price =$request->fuel_litter * $request->per_litter_price;
            $sale->save();

            $sumitRemainingStock = RemaningStock::where('petrol_type', $request->petrol_type)->latest()->first();
            $remaningStock = $sumitRemainingStock->fuel_litter - $request->fuel_litter;
            $sumitRemainingStock->fuel_litter = $remaningStock;
            $sumitRemainingStock->save();

            return redirect()->route('sale')->with('success', 'Sale Transaction has been updated Successfully!');
        }
    }
    public function saleDelete($id)
    {
        $sale = Sale::find($id);
        $sale->delete();
        return back()->with('success', 'Sale Transaction has been deleted successfully!');
    }



    /****Sale Report ****/

    public function saleStock()
    {
        $sales = RemaningStock::with('fuel')->get();
        return view('sale.report', compact('sales'));
    }
    public function reportFilter(Request $request)
    {
        $reportFilter = RemaningStock::where('created_at', '>=', $request->start_date)->where('created_at', '<=', $request->end_date)->get();
        return view('sale.reportFilter', compact('reportFilter'));
    }

    /****Profite Report ****/
    public function profites()
    {
        $petrolType = Fuel::all();
        return view('sale.profitesSearch', compact('petrolType'));
    }
    public function profiteFilter(Request $request)
    {
        $fuel = Fuel::where('id', '=', $request->petrol_type)->first();
        $create = Sale::where('petrol_type', '=', $request->petrol_type)->first();
        $sale = Sale::where('petrol_type', $request->petrol_type)->whereBetween('created_at', [$request->start_date, $request->end_date])->sum('total_price');
        $stock = Stock::where('petrol_type', $request->petrol_type)->whereBetween('created_at', [$request->start_date, $request->end_date])->sum('total_price');
        return view('sale.profites', compact('sale', 'stock', 'fuel', 'create'));
    }
}
