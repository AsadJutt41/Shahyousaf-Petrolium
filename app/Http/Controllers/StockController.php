<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fuel;
use App\Models\RemaningStock;
use App\Models\Stock;

class StockController extends Controller
{
    public function index()
    {
        $stock = Stock::with('fuel')->orderBy('id', 'desc')->get();
        $petrolType = Fuel::all();
        return view('stock.list',compact('petrolType', 'stock'));
    }
    public function stockStore(Request $request)
    {
        $valdate = $request->validate([
            'petrol_type' => ['required'],
            'fuel_litter' => ['required'],
            'per_litter_price' => ['required'],
        ]);

        $stock = new Stock();
        $stock->petrol_type = $request->petrol_type;
        $stock->fuel_litter = $request->fuel_litter;
        $stock->per_litter_price = $request->per_litter_price;
        $stock->total_price =$request->fuel_litter * $request->per_litter_price;
        $stock->save();

        $remaningStockEntry = new RemaningStock();
        $remaningStockEntry->petrol_type = $request->petrol_type;
        $remaningStockEntry->fuel_litter = $request->fuel_litter;
        $remaningStockEntry->per_litter_price = $request->per_litter_price;
        $remaningStockEntry->total_fuel = $request->fuel_litter;
        $remaningStockEntry->save();
        return back();
    }

    public function stockEdit($id)
    {
        $petrolType = Fuel::all();
        $stock = Stock::find($id);
        return view('stock.edit', compact('stock', 'petrolType'));
    }
    public function stockUpdate(Request $request, $id)
    {
        $valdate = $request->validate([
            'petrol_type' => ['required'],
            'fuel_litter' => ['required'],
            'per_litter_price' => ['required'],
        ]);

        $stock = Stock::find($id);
        $stock->petrol_type = $request->petrol_type;
        $stock->fuel_litter = $request->fuel_litter;
        $stock->per_litter_price = $request->per_litter_price;
        $stock->total_price =$request->fuel_litter * $request->per_litter_price;
        $stock->save();

        $remaningStockEntry = RemaningStock::where('petrol_type', $request->petrol_type)->latest()->first();
        $remaningStockEntry->petrol_type = $request->petrol_type;
        $remaningStockEntry->fuel_litter = $request->fuel_litter;
        $remaningStockEntry->per_litter_price = $request->per_litter_price;
        $remaningStockEntry->total_fuel = $request->fuel_litter;
        $remaningStockEntry->save();

        return redirect()->route('stock')->with('success', 'SStock Type has been updated successfully!');
    }
    public function stockDelete($id)
    {
        $stock = Stock::find($id);
        $stock->delete();
        return back()->with('success', 'Stock Type has been deleted successfully!');
    }
    public function stockFilter(Request $request)
    {
        $stock = Stock::whereBetween('created_at', [$request->start_date, $request->end_date])->with('fuel')->get();
        $petrolType = Fuel::all();
        return view('stock.stockFilter', compact('stock', 'petrolType'));
    }
}
