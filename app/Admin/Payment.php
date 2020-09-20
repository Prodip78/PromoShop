<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'payment_method','payment_status',
    ];
}
