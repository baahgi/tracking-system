<?php

namespace App\Http\Controllers;

use App\Http\Requests\Shipment\ShipmentFormRequest;
use App\Models\Shipment;
use App\Models\Station;
use App\Repositories\ShipmentRepository;
use App\Services\ShipmentService;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index(Request $request, ShipmentRepository $shipmentRepository)
    {
        // dd(request()->all());
        $shipments = $shipmentRepository->getAllShipments($request);

        return view('shipment.index', compact('shipments'));
    }

    public function create()
    {
        $destinations = Station::all();
        $origin = Station::first();

        return view('shipment.create', [
            'destinations' => $destinations,
            'origin' => $origin,
        ]);
    }

    public function store(ShipmentFormRequest $request, ShipmentService $shipmentService)
    {
        // dd(request()->all());
        $shipmentService->storeShipment($request);

        session()->flash('success', 'Shipment created successfully');

        return redirect()->back();
    }

    public function show(Shipment $shipment)
    {
        return view('shipment.show', compact('shipment'));
    }
}
