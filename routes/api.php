<?php

use Illuminate\Http\Request;
use App\Slider;
use App\SliderImage;
use App\Page;
use App\Gallery;
use App\GalleryCategory;
use Illuminate\Support\Facades\Storage;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user/{token}','UserController@get');

Route::get('social/links','OptionController@getsocial');

Route::get('service','ServiceController@getservices');

Route::get('category','GalleryCategoryController@getcategory');


Route::get('/public', function () {
    return env('APP_PATH');
});






