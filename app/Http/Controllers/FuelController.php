<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fuel;

class FuelController extends Controller
{
    public function index()
    {
        $fuel = Fuel::all();
        return view('fuel.list', compact('fuel'));
    }
    public function fuelStore(Request $request)
    {
        $valdate = $request->validate([
            'name' => ['required', 'unique:fuels']
        ]);

        $fuel = new Fuel();
        $fuel->name = $request->name;
        $fuel->save();
        return back();
    }
    public function fuelEdit($id)
    {
        $fuel = Fuel::find($id);
        return view('fuel.edit', compact('fuel'));
    }
    public function fuelUpdate(Request $request, $id)
    {
        $valdate = $request->validate([
            'name' => ['required', 'unique:fuels']
        ]);
        $fuel = Fuel::find($id);
        $fuel->name = $request->name;
        $fuel->save();
        return redirect()->route('fuel')->with('success', 'Fuel Type has been updated successfully!');
    }
    public function fuelDelete($id)
    {
        $fuel = Fuel::find($id);
        $fuel->delete();
        return back()->with('success', 'Fuel Type has been deleted successfully!');
    }
}
