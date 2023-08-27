<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    //public function calculateDonation($subtotal)
    //{
    //$vuelto = $subtotal % 10;

    //if ($vuelto > 5) {
    //$vuelto -= 5;
    //}

    //if (in_array($vuelto, range(0, 5))) {
    //return 0;
    //} elseif ($vuelto < 1) {
    //return 1 - $vuelto;
    //} elseif ($vuelto < 2) {
    //return 2 - $vuelto;
    //} elseif ($vuelto < 3) {
    //return 3 - $vuelto;
    //} else {
    //return 5 - $vuelto;
    //}
    //}
}
