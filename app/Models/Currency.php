<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    // protected $with = ['exchangeRate'];

    protected $fillable = [
        'display_name',
        'slug',
        'description',
        'status',
    ];

    /**
     * Currency has many products in a many to many relationship.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    /**
     * Currency has many rates.
     */
    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    // public function exchangeRate()
    // {
    //     return $this->hasMany(ExchangeRate::class);
    // }

    /**
     * Currency has many rates.
     */
    public function investments()
    {
        return $this->hasMany(Investment::class);
    }
}
