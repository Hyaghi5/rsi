<?php
use App\Service;
use App\Slider;
use App\Agent;
use App\Option;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 
Route::get('admin_page', 'HomeController@admin_index')->name('admin');

Route::get('sendmail', 'UserController@sendEmailReminder')->name('mail');



//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
Route::group(['middleware' => 'checkval'], function() {
Route::get('/slider/add/', 'SliderController@create')->name('slider');
Route::post('/slider/add/', 'SliderController@store')->name('slider');
Route::get('slider/view/', 'SliderController@index')->name('slider');
Route::get('/slider/edit/{id}','SliderController@edit')->name('slider');
Route::post('/slider/edit/{id}','SliderController@update')->name('slider');
Route::get('/slider/delete/{id}','SliderController@delete')->name('slider');

//********************************************************************************************
Route::get('/SliderImage/add/', 'SliderImageController@create')->name('SliderImageController');
Route::post('/SliderImage/add/', 'SliderImageController@store')->name('SliderImageController');
Route::get('SliderImage/view/{id}', 'SliderImageController@index')->name('SliderImageController');
Route::get('/SliderImage/edit/{id}','SliderImageController@edit')->name('SliderImageController');
Route::post('/SliderImage/edit/{id}','SliderImageController@update')->name('SliderImageController');
Route::get('/SliderImage/delete/{id}','SliderImageController@delete')->name('SliderImageController');

//********************************************************************************************
Route::get('/article/add', 'ArticleController@create')->name('article');
Route::post('/article/add', 'ArticleController@store')->name('article');
Route::get('/article/view', 'ArticleController@show')->name('article');

Route::get('/article/view/{token}', 'ArticleController@view_article')->name('article');

Route::get('/article/edit/{token}','ArticleController@edit')->name('edit');

Route::post('/article/edit/{token}','ArticleController@update')->name('update');

Route::get('/article/delete/{token}', 'ArticleController@delete')->name('article');
//*********************************************************************************************

//********************************************************************************************
Route::get('/service/view', 'ServiceController@index')->name('service');

Route::get('/service/view/{token}', 'ServiceController@view_ser')->name('service');
Route::get('/service/edit/{token}','ServiceController@edit')->name('edit');

Route::post('/service/edit/{token}','ServiceController@update')->name('update');
Route::get('service/add', 'ServiceController@create')->name('service');


Route::get('/service/delete/{token}', 'ServiceController@delete')->name('service');
Route::post('/service/add', 'ServiceController@store')->name('service');



//********************************************************************************************
Route::get('service_image/view', 'ServiceImageController@index')->name('service_image');

Route::get('/service_image/edit/{id}','ServiceImageController@edit')->name('service_image');

Route::post('/service_image/edit/{id}','ServiceImageController@update')->name('service_image');
Route::get('service_image/add', 'ServiceImageController@create')->name('service_image');

Route::post('service_image/add', 'ServiceImageController@store')->name('service_image');
Route::get('service_image/delete/{id}', 'ServiceImageController@delete')->name('service_image');


//********************************************************************************************

//********************************************************************************
Route::get('gallery/add/', 'GalleryController@create')->name('gallery');
Route::post('gallery/add/', 'GalleryController@store')->name('gallery');
Route::get('/gallery/view', 'GalleryController@view')->name('gallery');
Route::get('/gallery/edit/{id}','GalleryController@edit')->name('gallery');

Route::post('/gallery/edit/{id}','GalleryController@update')->name('gallery');

Route::get('/gallery/delete/{id}','GalleryController@delete')->name('gallery');



//********************************************************************************

Route::get('category/add', 'GalleryCategoryController@create')->name('gallery');
Route::post('category/add', 'GalleryCategoryController@store')->name('gallery');
Route::get('category/view', 'GalleryCategoryController@index')->name('gallery');

Route::get('category/view/{gallery}', 'GalleryCategoryController@view_offer')->name('gallery');

Route::get('/category/edit/{id}','GalleryCategoryController@edit')->name('gallery');

Route::post('/category/edit/{id}','GalleryCategoryController@update')->name('gallery');

Route::get('/category/delete/{id}','GalleryCategoryController@delete')->name('gallery');
//********************************************************************************************
//********************************************************************************************
Route::get('agent/add', 'AgentController@create')->name('agent');
Route::post('agent/add', 'AgentController@store')->name('agent');
Route::get('agent/view', 'AgentController@index')->name('agent');
Route::get('/agent/edit/{id}','AgentController@edit')->name('agent');
Route::post('/agent/edit/{id}','AgentController@update')->name('agent');
Route::get('/agent/delete/{id}','AgentController@delete')->name('agent');

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

Route::get('option/add','OptionController@create')->name('option');
Route::post('option/add','OptionController@store')->name('option');
Route::get('option/view','OptionController@index')->name('option');
Route::get('/option/edit/{id}','OptionController@edit')->name('option');
Route::post('/option/edit/{id}','OptionController@update')->name('option');
Route::get('/option/delete/{id}','OptionController@delete')->name('option');

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
Route::get('page/add', 'PageController@create')->name('page');
Route::post('page/add', 'PageController@store')->name('page');
Route::get('page/view', 'PageController@index')->name('page');
Route::get('/page/edit/{id}','PageController@edit')->name('page');
Route::post('/page/edit/{id}','PageController@update')->name('page');
Route::get('/page/delete/{id}','PageController@delete')->name('page');
});


Route::get('/gallery/show/{id}', 'GalleryController@show')->name('gallery');
Route::get('/index', function (Request $request) {
  $agents=Agent::all();
  $sliders=Slider::where('id',1)->with('sons')->get();
  $sliders2=Slider::where('id',3)->with('sons')->get();
  $services=Service::all();
  if(Session::get('locale')=="")
  {
    Session::put('locale', "en");
  }
    return view('welcome',compact('services','sliders','sliders2','agents','facebook','twitter','phone','mail','telegram'));
});

Route::get('/service/show/{token}', 'ServiceController@show')->name('service');

Route::get('/article', function (Request $request) {
  $article=Page::where('name','WhoWeAre')->first();
    return view('article',compact('article'));
});

Route::get('/activity', function () {
    return view('activity');
});

Route::get('/', function () {
    return view('welcome_main');
});

Route::get('/gallery','GalleryCategoryController@main_view');

Route::get('/founder', function () {
  $page=Page::where('name','founder')->first();
   return view('founder',compact('page')); 
});
Route::get('setlocale/{locale}', function ($locale) {
  if (in_array($locale, \Config::get('app.locales'))) {
    Session::put('locale', $locale);
  }
  return redirect()->back();
});

