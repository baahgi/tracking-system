<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Region;
use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function index()
    {
        $stations = Station::with(['region', 'group'])->get();

        return view('master.station.index', [
            'stations' => $stations,
            'regions' => Region::all(['id', 'name']),
            'groups' => Group::all(['id', 'name']),
        ]);
    }

    public function create()
    {
        return view('master.station.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'max:100'],
            'group_id' => ['required', 'integer'],
            'region_id' => ['required', 'integer'],
        ]);

        Station::create($data);

        session()->flash('success', 'station added successfully');
        return redirect()->back();
    }

    public function edit(Station $station)
    {
        return view('master.station.edit', [
            'regions' => Region::all(['id', 'name']),
            'groups' => Group::all(['id', 'name']),
            'station' => $station,
        ]);
    }

    public function update(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'max:100'],
            'group_id' => ['required', 'integer'],
            'region_id' => ['required', 'integer'],
        ]);
        $station = Station::findOrFail($request->shipment_id);

        $station->update($data);

        session()->flash('success', 'Station updated successfully');
        return redirect()->back();
    }
}
