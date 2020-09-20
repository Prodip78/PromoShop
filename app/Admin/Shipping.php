<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = [
        'first_name','last_name','city','address','phone','email',
    ];
}
