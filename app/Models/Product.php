<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'display_name',
        'slug',
        'title',
        'abbreviation',
        'description',
    ];

    /**
     * Product belongs to a category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Product has many tenors in a many to many relationship.
     */
    public function tenors()
    {
        return $this->belongsToMany(Tenor::class)->withTimestamps()->select(['tenor_id', 'display_name', 'days', 'months', 'years']);
    }

    /**
     * Product has many currencies in a many to many relationship.
     */
    public function currencies()
    {
        return $this->belongsToMany(Currency::class)->withTimestamps();
    }

    /**
     * Product has many bank accounts in a many to many relationship.
     */
    // public function bankAccounts()
    // {
    //     return $this->belongsToMany(BankAccount::class)->withTimestamps()->where('status', 1)->orderBy('display_name', 'ASC')->select(['display_name', 'account_number', 'account_name', 'currency_type']);
    // }

    /**
     * Product has many currencies in a many to many relationship.
     */
    // public function properties()
    // {
    //     return $this->belongsToMany(Property::class)->withTimestamps()->select(['property_id', 'display_name']);
    // }

    /**
     * Product has many interest payment options in a many to many relationship.
     */
    // public function interestPaymentOptions()
    // {
    //     return $this->belongsToMany(InterestPaymentOption::class)->withTimestamps()->select(['interest_payment_option_id', 'display_name', 'slug']);
    // }

    /**
     * Product has many rates.
     */
    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    /**
     * Product has many investments in a one to many relationship.
     */
    public function investments()
    {
        return $this->hasMany(Investment::class);
    }
}
