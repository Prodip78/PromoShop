<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_name','customer_email','password','phone',
    ];

}
