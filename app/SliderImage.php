<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
class SliderImage extends Model
{
      protected $fillable = [
        'mobile_img','desktop_img','main_title_ar','main_title_en','main_title_ru','sub_title_ar','sub_title_en','sub_title_ru','slider_id',
    ];

public function slider()
{
	return $this->belongsTo('Slider','slider_id');
}


        public function getmainTitle()
    {
    	$str = 'main_title_' . Session::get('locale');
    	$sub_title=$this[$str];
    	return $sub_title;
    }

        public function getsubTitle()
    {
    	$str = 'sub_title_' . Session::get('locale');
    	$sub_title=$this[$str];
    	return $sub_title;
    }
}
