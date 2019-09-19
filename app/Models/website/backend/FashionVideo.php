<?php

namespace App\Models\website\backend;

use Illuminate\Database\Eloquent\Model;

class FashionVideo extends Model
{
    protected $table = 'fashion_video';
    public function fashionVideoCategory(){
        return $this->belongsTo('App/Models/website/backend/FashionVideoCategory', 'fashion_category');
    }
}
