<?php

namespace App\Models\website\backend;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider';

    public function sliderCategory(){
        return $this->belongsTo('App\Models\Website\backend\SliderCategory','slider_category');
    }
}
