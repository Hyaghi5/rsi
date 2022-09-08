<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_image extends Model
{
     public function service()
     {
     	return $this->belongsTo('App\Service','service_id');
     }


      protected $fillable = [
        'service_id','image',
    ];

     public function reference()
    {
        return $this->belongsTo('App\Slider','slider_id');
    }

}
