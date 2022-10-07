<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
