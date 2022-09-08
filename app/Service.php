<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
class Service extends Model
{
    //


      protected $fillable = [
        'title_en','title_ar','title_ru','description_en','description_ar','description_ru','img','token'
    ];
  

    public function Application_service()
  {
    return $this->hasMany('App\Application');
  }

     public function images()
  {
    return $this->hasMany('App\Service_image');
  }

        public function getTitle()
    {
      $str = 'title_' . Session::get('locale');
      $title=$this[$str];
      return $title;
    }

        public function getDescription()
    {
      $str = 'description_' . Session::get('locale');
      $description=$this[$str];
      return $description;
    }
}
