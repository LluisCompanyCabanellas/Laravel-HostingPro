<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];  

    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }


}