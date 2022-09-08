<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
class Gallery extends Model
{
        public function category()
    {
    	return $this->belongsTo('App\GalleryCategory','cat_id');
    }

       protected $fillable = [
       'title_en','title_ar','title_ru','cat_id','image',
    ];
    
        
public function getTitle()
    {
      $str = 'title_' . Session::get('locale');
      $title=$this[$str];
      return $title;
    }
 
}
