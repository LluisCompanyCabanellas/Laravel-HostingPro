<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $guarded = [];  
    protected $table = "product_categories";

    
    public function products()
    {
        return $this->hasMany(Faq::class, 'category_id');
    }
}