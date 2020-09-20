<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'sub_category_name','description','publication_status',
    ];
}
