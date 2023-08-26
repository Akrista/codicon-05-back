<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;


    protected $fillable = [
        'mount',
        'user_id',
        'organization_id',
        'order_id',
        'order',
    ];

}
