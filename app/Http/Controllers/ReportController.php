<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use App\Services\FilterShipments;

class ReportController extends Controller
{
    public function datewise(Request $request)
    {
        // Performance::point();
        $query = Shipment::orderBy('id', 'desc');

        $query = $request->has('from') ?
            (new FilterShipments)->filterByDate($query, $request->from, $request->to) : (new FilterShipments)->filterByDate($query, date('Y-m-d 00:00:00'), date('Y-m-d 00:00:00'));

        // $query = (new FilterShipmentsByRole())->filterByRole($query);

        $shipments = $query->get();

        return view('report.datewise', compact('shipments'));
    }
}
