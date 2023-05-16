<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'display_name',
        'slug',
        'description',
        'description',
        'category_image',
        'status',
    ];

    /**
     * Category has many products in a one to many relationship.
     */
    public function products()
    {
        return $this->hasMany(Product::class)->where('status', 1);
    }
}
