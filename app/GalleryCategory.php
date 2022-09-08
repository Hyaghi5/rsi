<?php

namespace App;
use Session;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
       public function gallery()
    {
    	return $this->hasMany('App\Gallery');
    }


    protected $fillable = [
        'title_en','title_ar','title_ru','slag',
    ];
    
    
public function getTitle()
    {
      $str = 'title_' . Session::get('locale');
      $title=$this[$str];
      return $title;
    }
}
