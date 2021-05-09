<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_img', 
        'product_code', 
        'product_name', 
        'product_price', 
        'product_price', 
        'product_store',
        'product_exp',
        'categories_id',
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'categories_id');
    }

}
