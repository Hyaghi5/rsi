<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   

       protected $fillable = [
        'title_en','title_ar','title_ru','description_en','description_ar','description_ru','token',
    ];
  
}
