<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipment_id', 'status_id', 'user_id', 'pod',
        'reason', 'idtype', 'idnumber', 'name', 'created_at'
    ];
}
