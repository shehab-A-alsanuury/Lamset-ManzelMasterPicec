<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'total',
        'grand_total',
        'discount_amount',
        'delivery_charge',
        'vat_charge',
    ];
}
