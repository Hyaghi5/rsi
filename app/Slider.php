<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
class Slider extends Model
{
    
       protected $fillable = [
        'title',
    ];
  
    public function sons()
    {
        return $this->hasMany('App\SliderImage');
    }
}
