<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'currency_id',
        'tenor_id',
        'minimum_amount',
        'maximum_amount',
        'customer_max_rate',
        'officer_max_rate',
        'status',
        'has_direct_debit',
        'has_no_direct_debit'
    ];

    /**
     * Rate belongs to a currency
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    /**
     * Rate belongs to a tenor
     */
    public function tenor()
    {
        return $this->belongsTo(Tenor::class);
    }

    /**
     * Rate belongs to a product
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
