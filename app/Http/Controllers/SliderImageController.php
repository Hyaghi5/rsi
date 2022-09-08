<?php

namespace App\Http\Controllers;

use App\SliderImage;
use App\Slider;
use Illuminate\Http\Request;

class SliderImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index($id)
    {
        $sliders=SliderImage::where('slider_id',$id)->paginate(5);
        return view('admin.SliderImage.view',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders=Slider::all();
        return view('admin.SliderImage.add',compact('sliders'));
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
      if($request->file('desktop_image')!= null && $request->file('mobile_image')!= null ){

            $path;
            $path1;
            if(request()->file('desktop_image')->isValid()){
                $path = $request->file('desktop_image')->storeAs('public', time().'.jpg');
                $desktop_image=str_replace('public/', '', $path);
                if(empty($path)){
                    return response()->json([],400);
                }

            }

                if(request()->file('mobile_image')->isValid()){
                $path1 = $request->file('mobile_image')->storeAs('public', "mobile".time().'.jpg');
                $mobile_image=str_replace('public/', '', $path1);
                if(empty($path1)){
                    return response()->json([],400);
                }

            }

        $slider= SliderImage::create([
            'main_title_en' => $data['main_title_en'],
            'main_title_ar' => $data['main_title_ar'],
            'main_title_ru' => $data['main_title_ru'],
            'sub_title_en' => $data['sub_title_en'],
            'sub_title_ar' => $data['sub_title_ar'],
            'sub_title_ru' => $data['sub_title_ru'],
            'slider_id' => $data['father'],
            'desktop_img' => $desktop_image,
            'mobile_img' => $mobile_image,
          ]);
         return redirect('/slider/view');
    }
    return response()->json([],400);
}



    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $fathers=Slider::all();
        $slider=SliderImage::find($id);
        return view('admin.SliderImage.edit',compact('slider','fathers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
                $data=$request->all();
      if($request->file('desktop_image')!= null && $request->file('mobile_image')!= null){

            $path;
            $path1;
            if(request()->file('desktop_image')->isValid()){
                $path = $request->file('desktop_image')->storeAs('public', time().'.jpg');
                $desktop_image=str_replace('public/', '', $path);
                if(empty($path)){
                    return $slider->desktop_img;
                }

            }

                if(request()->file('mobile_image')->isValid()){
                $path1 = $request->file('mobile_image')->storeAs('public', "mobile".time().'.jpg');
                $mobile_image=str_replace('public/', '', $path1);
                if(empty($path1)){
                    return $slider->mobile_img;
                }

            }

         $slider=SliderImage::find($id);
            $slider->main_title_en = $data['main_title_en'];
            $slider->main_title_ar = $data['main_title_ar'];
            $slider->main_title_ru = $data['main_title_ru'];
            $slider->sub_title_en = $data['sub_title_en'];
            $slider->sub_title_ar = $data['sub_title_ar'];
            $slider->sub_title_ru = $data['sub_title_ru'];
            $slider->slider_id=$data['fathers'];
            $slider->desktop_img = $desktop_image;
            $slider->mobile_img = $mobile_image;
            $slider->save();
         return redirect('/SliderImage/view'.$slider->id);
    }

       $slider=SliderImage::find($id);
       $desktop_image=$slider->desktop_img;
       $mobile_image=$slider->mobile_img;
            $slider->main_title_en = $data['main_title_en'];
            $slider->main_title_ar = $data['main_title_ar'];
            $slider->main_title_ru = $data['main_title_ru'];
            $slider->sub_title_en = $data['sub_title_en'];
            $slider->sub_title_ar = $data['sub_title_ar'];
            $slider->sub_title_ru = $data['sub_title_ru'];
            $slider->slider_id=$data['father'];
            $slider->desktop_img = $desktop_image;
            $slider->mobile_img = $mobile_image;
            $slider->save();
         return redirect('/SliderImage/view/'.$slider->id);

    return response()->json([],400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }

    public function delete($id)
    {
        $slider=SliderImage::find($id);
        $slider->delete();
        return redirect('slider/view');
    }
}
