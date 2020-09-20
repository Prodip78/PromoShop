<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'banner_image','short_description','long_description','publication_status',
    ];

}
