<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenor extends Model
{
    use HasFactory;

    protected $fillable = [
        'display_name',
        'slug',
        'description',
        'status',
        'days',
        'months',
        'years',
    ];

    /**
     * Product has many tenors in a many to many relationship.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    /**
     * Tenor has many rates.
     */
    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    /**
     * Tenor has many investments in a one to many relationship.
     */
    public function investments()
    {
        return $this->hasMany(Investment::class);
    }
}
