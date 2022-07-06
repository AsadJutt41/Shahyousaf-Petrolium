<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SaleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

/**** Fuel Management ****/
Route::get('/fuel', [FuelController::class, 'index'])->name('fuel');
Route::post('/fuel/store', [FuelController::class, 'fuelStore'])->name('fuelStore');
Route::get('/fuel/edit/{id}', [FuelController::class, 'fuelEdit'])->name('fuelEdit');
Route::post('/fuel/update/{id}', [FuelController::class, 'fuelUpdate'])->name('fuelUpdate');
Route::get('/fuel/delete/{id}', [FuelController::class, 'fuelDelete'])->name('fuelDelete');

/**** Stock Management ****/
Route::get('/stock', [StockController::class, 'index'])->name('stock');
Route::post('/stock/store', [StockController::class, 'stockStore'])->name('stockStore');
Route::get('/stock/edit/{id}', [StockController::class, 'stockEdit'])->name('stockEdit');
Route::post('/stock/update/{id}', [StockController::class, 'stockUpdate'])->name('stockUpdate');
Route::get('/stock/delete/{id}', [StockController::class, 'stockDelete'])->name('stockDelete');
Route::post('/stock-filter', [StockController::class, 'stockFilter'])->name('stockFilter');

/**** Sale Management ****/
Route::get('/sale', [SaleController::class, 'index'])->name('sale');
Route::get('/add/sale', [SaleController::class, 'addSale'])->name('addSale');
Route::post('/sale/store', [SaleController::class, 'saleStore'])->name('saleStore');
Route::get('/sale/edit/{id}', [SaleController::class, 'saleEdit'])->name('saleEdit');
Route::post('/sale/update/{id}', [SaleController::class, 'saleUpdate'])->name('saleUpdate');
Route::get('/sale/delete/{id}', [SaleController::class, 'saleDelete'])->name('saleDelete');


Route::get('/sale-stock-report', [SaleController::class, 'saleStock'])->name('saleStock');
Route::post('/report-filter', [SaleController::class, 'reportFilter'])->name('reportFilter');

Route::get('profites', [SaleController::class, 'profites'])->name('profites');
Route::post('profites-filter', [SaleController::class, 'profiteFilter'])->name('profiteFilter');