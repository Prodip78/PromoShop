<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name','category_id','sub_category_id','product_short_description','product_long_description','product_price','product_image','quantity','product_size','product_color','publication_status',
    ];
}
