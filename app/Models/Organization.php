<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organization extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'image_path'
    ];

    public function Donations(): HasMany
    {
        return $this->hasMany(Donation::class);
    }
}
