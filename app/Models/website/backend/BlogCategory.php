<?php

namespace App\Models\website\backend;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_category';

    public function blogs(){
        return $this->hasMany('App\Models\website\backend\Blog', 'id');
    }
}
