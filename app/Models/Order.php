<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'user_id',
        'payment_type',
        'cash',
        'Billdenomination',
        'amount',
        'suggest_donation',
        'donation',
        'organization_id',
        'donation_id',
    ];
}
