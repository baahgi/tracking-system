<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function origin()
    {
        return $this->belongsTo(Station::class);
    }
    public function destination()
    {
        return $this->belongsTo(Station::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function shipmentstatuses()
    {
        return $this->hasMany(ShipmentStatus::class);
    }
}
