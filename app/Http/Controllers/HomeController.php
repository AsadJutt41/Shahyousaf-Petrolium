<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sale;
use App\Models\Stock;
use App\Models\Fuel;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::count();


        $start = Carbon::now()->startOfMonth();
        $end = Carbon::now();
        $thisMonthSale = Sale::where('created_at', ">=", $start)->where('created_at' , '<=', $end)->sum('total_price');
        $thisMonthSaleLitter = Sale::where('created_at', ">=", $start)->where('created_at' , '<=', $end)->sum('fuel_litter');
        $thisMonthPurchase = Stock::where('created_at', ">=", $start)->where('created_at' , '<=', $end)->sum('total_price');
        $thisMonthPurchaseLitter = Stock::where('created_at', ">=", $start)->where('created_at' , '<=', $end)->sum('fuel_litter');
        $totalSale = Sale::sum('total_price');
        $totalPurchase = Stock::sum('total_price');
        $remainingStockPetrol = Stock::with('fuel')->where('petrol_type', 1)->sum('fuel_litter');
	$remainingStockDesile = Stock::with('fuel')->where('petrol_type', 2)->sum('fuel_litter');
	$remainingStockMobOil = Stock::with('fuel')->where('petrol_type', 3)->sum('fuel_litter');
        return view('dashboard.index', compact('users', 'thisMonthSale', 'thisMonthPurchase', 'totalSale', 'totalPurchase', 'remainingStockPetrol', 'remainingStockDesile', 'remainingStockMobOil', 'thisMonthSaleLitter', 'thisMonthPurchaseLitter'));
    }
}
