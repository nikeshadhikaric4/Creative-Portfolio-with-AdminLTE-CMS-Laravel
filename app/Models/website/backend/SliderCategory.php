<?php

namespace App\Models\website\backend;

use Illuminate\Database\Eloquent\Model;

class SliderCategory extends Model
{
    protected $table= 'slidercategory';

    public function sliders(){
        return $this->hasMany('App\Models\Website\backend\Slider', 'id');
    }
}
