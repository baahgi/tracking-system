<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Models\ShipmentStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ShipmentUpdateController extends Controller
{
    public function shipmentdispatch()
    {
        return view('shipment.update.dispatch');
    }

    public function arrived()
    {
        return view('shipment.update.arrived');
    }

    public function outfordelivery()
    {
        return view('shipment.update.outfordelivery');
    }

    public function delivered()
    {
        return view('shipment.update.delivered');
    }

    public function hold()
    {
        return view('shipment.update.hold');
    }

    public function return()
    {
        return view('shipment.update.return');
    }


    public function bulkupdates(Request $request)
    {
        // dd($request->all());
        // dd(Carbon::parse($request->datetime)->format('Y-m-d h:m:s'));
        $barcodes = preg_split('/\r\n|[\r\n]/', $request->consignmentno);
        $status_id = $request->status_id;
        $name = $request->name;
        $idtype = $request->idtype;
        $idnumber = $request->idnumber;
        $rider_id = $request->rider_id;
        $shipments = Shipment::whereIn('consignmentno', $barcodes)->get();

        if (count($shipments) > 0) {
            foreach ($barcodes as $barcode) {

                $shipment = Shipment::where('consignmentno', $barcode)->first();

                if ($shipment && ($shipment->status_id < 6)) {

                    $rider_id ? $shipment->update(['status_id' => $status_id, 'rider_id' => $rider_id]) : $shipment->update(['status_id' => $status_id]);
                    $shipment_status = ShipmentStatus::create(['shipment_id' => $shipment->id, 'status_id' => $status_id, 'user_id' => 1, 'name' => $name, 'idtype' => $idtype, 'idnumber' => $idnumber]);

                    if ($status_id == 6) {

                        $fileName = rand(0000000000, 9999999999) . '.' . $request->pod->extension();
                        $request->pod->move(public_path('uploads'), $fileName);

                        $path = public_path('uploads') . '/' . $fileName;
                        $img = Image::make($path);

                        $img->resize(600, 600, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save(public_path('uploads') . '/' . $fileName);

                        $shipment_status->update(['pod' => $fileName, 'created_at' => Carbon::parse($request->datetime)->format('Y-m-d h:m:s')]);
                    }
                }
            }

            // session()->put('shipments', $shipments);
            return redirect()->back()->with(['success' => 'Shipment Updated successfully!']);
        } else {

            return redirect()->back()->with('error', 'Shipment details not found');
        }
    }

}
