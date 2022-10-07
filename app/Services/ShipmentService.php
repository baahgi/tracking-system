<?php

namespace App\Services;

use App\Models\Shipment;
use App\Models\ShipmentStatus;
use App\Models\Station;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShipmentService
{

public function storeShipment($req)
{
    $shipment = Shipment::create([
        'consignmentno' => $req->consignmentno,
        'reference_no' => $req->reference_no,
        'origin_id' => $req->origin_id,
        'destination_id' => $req->destination_id,
        'weight' => $req->weight,
        'amount' => $req->amount,
        'item_type' => $req->item_type,
        'value' => $req->value,
        'quantity' => 1, //will be added when needed.
        'description' => $req->description,
        'payment_mode' => $req->payment_mode,
        'sender_name' => $req->sender_name,
        'sender_phone' => $req->sender_phone,
        'sender_email' => $req->sender_email,
        'sender_address' => $req->sender_address,
        'receiver_name' => $req->receiver_name,
        'receiver_phone' => $req->receiver_phone,
        'receiver_email' => $req->receiver_email,
        'receiver_address' => $req->receiver_address,
        'delivery_place' => (Station::where('id', $req->destination_id)->first())->name,
        'user_id' => 1,
        'status_id' => 1,
        'date' => Carbon::today(),

    ]);


    ShipmentStatus::create([
        'shipment_id' => $shipment->id,
        'status_id' => 1,
        'user_id' => 1,
    ]);


}



}
