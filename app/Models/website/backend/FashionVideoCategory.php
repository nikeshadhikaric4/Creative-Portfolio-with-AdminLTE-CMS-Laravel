<?php

namespace App\Models\website\backend;

use Illuminate\Database\Eloquent\Model;

class FashionVideoCategory extends Model
{
    protected $table='fashion_video_category';

    public function fashionVideos(){
        return $this->hasMany('App\Models\website\backend\FashionVideo', 'id');
    }
}
