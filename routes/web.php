<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\ShipmentUpdateController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\GroupController;
use App\Models\Shipment;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'dashboard']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('dashboard', [HomeController::class, 'dashboard']);

Route::get('customer', [CustomerController::class, 'index']);
Route::get('customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('customer', [CustomerController::class, 'store'])->name('customer.store');
Route::get('customer/{customer}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');


Route::get('station', [StationController::class, 'index'])->name('station.index');
Route::post('station', [StationController::class, 'store'])->name('station.store');
Route::get('station/{station}/edit', [StationController::class, 'edit'])->name('station.edit');
Route::put('station/update', [StationController::class, 'update'])->name('station.update');
Route::get('group', [GroupController::class, 'index'])->name('group.index');

Route::resource('shipment', ShipmentController::class)->except('destroy');
Route::post('shipment/withdate', [ShipmentController::class, 'index'])->name('shipment.withdate');

//shipment update
Route::get('shipmentupdate/dispatch', [ShipmentUpdateController::class, 'shipmentdispatch'])->name('shipment.update.dispatch');
Route::get('shipmentupdate/arrived', [ShipmentUpdateController::class, 'arrived'])->name('shipment.update/arrived');
Route::get('shipmentupdate/outfordelivery', [ShipmentUpdateController::class, 'outfordelivery'])->name('shipment.update.outfordelivery');
Route::get('shipmentupdate/delivered', [ShipmentUpdateController::class, 'delivered'])->name('shipment.update.delivered');
Route::get('shipmentupdate/hold', [ShipmentUpdateController::class, 'hold'])->name('shipment.update.hold');
Route::get('shipmentupdate/return', [ShipmentUpdateController::class, 'return'])->name('shipment.update.return');
Route::post('shipmentupdate/bulkupdates', [ShipmentUpdateController::class, 'bulkupdates'])->name('shipment.bulkupdate');

Route::get('report/datewise', [ReportController::class, 'datewise'])->name('shipment.report.datewise');
Route::get('report/finance', [ReportController::class, 'finance'])->name('shipment.report.finanace');
