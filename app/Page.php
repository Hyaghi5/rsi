<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
class Page extends Model
{
    
      protected $fillable = [
        'name','slag','title_en','title_ar','title_ru','description_en','description_ar','description_ru',
    ];

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
