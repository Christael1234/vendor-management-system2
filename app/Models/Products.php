<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Get the category associated with the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the units associated with the product.
     */
    public function units()
    {
        return $this->belongsTo(Unit::class);
    }
}