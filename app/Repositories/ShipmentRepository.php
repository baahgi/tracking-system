<?php

namespace App\Repositories;

use App\Models\Shipment;
use App\Services\FilterShipments;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShipmentRepository
{
    public function getAllShipments ($request)
    {
        $query = Shipment::select('id','consignmentno','sender_name', 'receiver_name', 'origin_id', 'destination_id', 'status_id', 'created_at')
                ->orderBy('id', 'desc');

        $query = $request->has('from') ?
            (new FilterShipments)->filterByDate($query, $request->from, $request->to) : (new FilterShipments)->filterByDate($query, date('Y-m-d 00:00:00'), date('Y-m-d 00:00:00'));


        $shipments = $query->get();

        return $shipments;

    }



}
