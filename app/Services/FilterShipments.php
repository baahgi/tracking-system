<?php

namespace App\Services;


class FilterShipments
{
    public function filterByDate($query, $from, $to)
    {
        $query->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($from)), date('Y-m-d  23:59:59', strtotime($to))]);
        return $query;
    }

    public function filterByUpdatedDate($query, $from, $to)
    {
        $query->whereBetween('updated_at', [date('Y-m-d 00:00:00', strtotime($from)), date('Y-m-d  23:59:59', strtotime($to))]);
        return $query;
    }

    public function filterByRole($query)
    {
    //     $role = Auth::user()->role_id;
    //     if($role == 2){
    //         $query->where('origin_id', Auth::user()->station_id);
    //     }elseif($role == 3){
    //         $query->where('user_id', Auth::user()->id);
    //     }
    //     return $query;
    }

    public function filterByStation($query)
    {
        // if ($role == 2 || $role == 3) {
        //     $shipments = $shipments->filter(function ($shipment) {
        //         return $shipment->origin_id == Auth::user()->station_id || $shipment->destination_id == Auth::user()->station_id;
        //     });
        // }
    }
}
