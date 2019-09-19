<?php

namespace App\Models\website\backend;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table='blog';

    public function blogCategory(){
        return $this->belongsTo('App\Models\Website\backend\BlogCategory', 'blog_category_id');
    }
}
