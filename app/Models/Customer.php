<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'company_name', 'email', 'phone', 'password',
        'address', 'code', 'photo', 'email_verified_at', 'remember_token'
    ];
}
