<?php

namespace App\Http\Controllers;
use Image;
use App\Gallery;
use App\GalleryCategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\r
     Response
     */
    public function index($id)
    {
        $galleries=Gallery::where('cat_id',$id)->paginate(8);
        return view('gallery',compact('galleries'));

    }


        public function index_admin()
    {
        $galleries=Gallery::paginate(2);
        return view('admin.Gallery.view',compact('galleries'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallery_categories=GalleryCategory::all();
       return view('admin.Gallery.add',compact('gallery_categories'));
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
      if($request->file('image')!= null){
        $destinationPath = public_path('storage');
        $image = $request->file('image');
      

              if($request->hasFile('image')){
            foreach ($request['image'] as $file) {
              $input = time().'.'.$file->getClientOriginalName();
                $img = Image::make($file->getRealPath());
                  $img->resize(500, 500, function ($constraint) {
                  $constraint->aspectRatio();
                 })->save($destinationPath.'/'.$input);

                // $img_name=str_replace('public/', '', $path);
                if(empty($destinationPath)){
                    return response()->json([],400);
                }

            Gallery::create([
            'cat_id' => $data['cat_id'],
            'image' => $input,
          ]);
             }
        }

                    

       
         return redirect('/gallery/view');
    }
    return response()->json([],400);
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
  public function view()
  {
            $galleries=Gallery::paginate(2);
        return view('admin.Gallery.view',compact('galleries'));
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery=Gallery::find($id);
        $gallery_categories=GalleryCategory::all();
        return view('admin.Gallery.edit',compact('gallery','gallery_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request$request,$id)
    {  
        $data=$request->all();
      if($request->file('card_image')!= null && $request->file('design_image')!= null ){

            $path;
            $path1;
            if(request()->file('card_image')->isValid()){
                $path = $request->file('card_image')->storeAs('public', time().'.jpg');
                $card_image=str_replace('public/', '', $path);
                if(empty($path)){
                    return response()->json([],400);
                }

            }

                    if(request()->file('design_image')->isValid()){
                $path1 = $request->file('design_image')->storeAs('public', time().'.jpg');
                $design_image=str_replace('public/', '', $path);
                if(empty($path1)){
                    return response()->json([],400);
                }

            }
            $gallery=Gallery::find($id);
            $gallery->cat_id = $data['cat_id'];
            $gallery->card_image = $card_image;
            $gallery->design_image = $design_image;
            $gallery->title_en = $data['title_en'];
            $gallery->title_ar = $data['title_ar'];
            $gallery->title_ar = $data['title_ru'];
            $gallery->link = $data['link'];
            $gallery->save();

         return redirect('/gallery/view');
    }
    $gallery=Gallery::find($id);
            $gallery->cat_id = $data['cat_id'];
            $gallery->card_image = $gallery->card_image;
            $gallery->design_image = $gallery->design_image;
            $gallery->title_en = $data['title_en'];
            $gallery->title_ar = $data['title_ar'];
            $gallery->title_ar = $data['title_ru'];
            $gallery->link = $data['link'];
            $gallery->save();
            return redirect('/gallery/view');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }

    public function delete($id)
    {
        $gallery=Gallery::find($id);
        $gallery->delete();
        return redirect('/gallery/view');
    }

    public function show($id)
    {
        $galleries=Gallery::where('cat_id',$id)->get();
        $cat = GalleryCategory::find($id);
        return view('gallery',compact('galleries','cat'));
    }
}
