<?php

namespace App\Http\Controllers;

use App\Page;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
     $pages=Page::paginate(2);
      return view ('admin.Page.view',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('admin.Page.add'); 
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        
        $data=$request->all();
        $image = $request->file('img');
        
    if($request->file('img')!= null){
        $input = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('storage');

            $path;
            if(request()->file('img')->isValid()){
                  // dd($destinationPath);
                // $path = $request->file('img')->storeAs('public', time().'.jpg');
                $img = Image::make($image->getRealPath());
                  $img->resize(500, 500, function ($constraint) {
                  $constraint->aspectRatio();
                 })->save($destinationPath.'/'.$input);

                // $img_name=str_replace('public/', '', $path);
                if(empty($destinationPath)){
                    return response()->json([],400);
                }

            }

         Page::create([
            'name' => $data['name'],
            'slag' => $data['slag'],
            'title_en' => $data['title_en'],
            'title_ar' => $data['title_ar'],
            'title_ru' => $data['title_ru'],
            'image' => $input,
            'description_en' => $data['description_en'],
            'description_ar' => $data['description_ar'],
            'description_ru' => $data['description_ru'],
          ]);
         return redirect('/page/view');
    }
          Page::create([
            'name' => $data['name'],
            'slag' => $data['slag'],
            'title_en' => $data['title_en'],
            'title_ar' => $data['title_ar'],
            'title_ru' => $data['title_ru'],
            'image' => null,
            'description_en' => $data['description_en'],
            'description_ar' => $data['description_ar'],
            'description_ru' => $data['description_ru'],
          ]);
         return redirect('/page/view');
}



 


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


   
    public function edit(Page $page,$id)
    {
        $page=Page::find($id);
        return view('admin.Page.edit',compact('page'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
             $data=$request->all();
      if($request->file('img')!= null){

            $path;
            if(request()->file('img')->isValid()){
             $path = $request->file('img')->storeAs('public', time().'.jpg');
                $img_name=str_replace('public/', '', $path);
                if(empty($path)){
                    return response()->json([],400);
                }

         $data['img'] = '/storage/'.$data['img'];

        $new_page=Page::find($id);
        $new_page->name=$data['name'];
        $new_page->slag=$data['slag'];
        $new_page->title_ar=$data['title_ar'];
        $new_page->title_en=$data['title_en'];
        $new_page->title_ru=$data['title_ru'];
        $new_page->description_ar=$data['description_ar'];
        $new_page->description_en=$data['description_en'];
        $new_page->description_ru=$data['description_ru'];
        $new_page->image=$img_name;
        $new_page->save();
        return redirect('page/view');

            }
        }
        $new_page=Page::find($id);
            $img_name=$new_page->img;

        $new_page=Page::find($id);
        $new_page->title_ar=$data['title_ar'];
        $new_page->title_en=$data['title_en'];
        $new_page->title_ru=$data['title_ru'];
        $new_page->description_ar=$data['description_ar'];
        $new_page->description_en=$data['description_en'];
        $new_page->description_ru=$data['description_ru'];
        $new_page->image=$img_name;
        $new_page->save();
        return redirect('page/view');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }

    function set(Page $page, Request $request){
  $page->ar_title=$request['ar_title'];
  $page->en_title=$request['en_title'];
  $page->ar_description=$request['ar_description'];
  $page->en_description=$request['en_description'];
  $page->img=$request['img'];
  $page->save();
  //$currentuser->save();//
  return $service;
}


     public function delete($id)
     {
    $page=Page::find($id);
    $page->delete();
    return redirect('/page/view');
     }

}
