<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [];

    // Product.php
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
