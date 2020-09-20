<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $fillable = [
        'product_name','product_price','quantity',
    ];
}
