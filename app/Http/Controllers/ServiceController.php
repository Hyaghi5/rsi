<?php

namespace App\Http\Controllers;

use App\Service;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $services=Service::paginate(2);
      return view ('admin.Services.view',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('admin.Services.add'); 
    }


    public function create_sub(Service $service,$id)
    {
        $service=Service::find($id);
        $service1=Service::all();
        return view('admin.Services.add_sub',compact('service','service1'));
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
    $title_en=$data['title_en'];
        $description_en=$data['description_en'];
        $token=$title_en.$description_en;
        $image = $request->file('img');
        $input = time().'.'.$image->getClientOriginalExtension();
        
      if($request->file('img')!= null){
    $destinationPath = public_path('storage');

            $path;
            if(request()->file('img')->isValid()){
                  // dd($destinationPath);
                // $path = $request->file('img')->storeAs('public', time().'.jpg');
                $img = Image::make($image->getRealPath());
                  $img->resize(800, 600, function ($constraint) {
                  $constraint->aspectRatio();
                 })->save($destinationPath.'/'.$input);

                // $img_name=str_replace('public/', '', $path);
                if(empty($destinationPath)){
                    return response()->json([],400);
                }

            }

         Service::create([
            'title_en' => $data['title_en'],
            'title_ar' => $data['title_ar'],
            'title_ru' => $data['title_ru'],
            'img' => $input,
            'description_en' => $data['description_en'],
            'description_ar' => $data['description_ar'],
            'description_ru' => $data['description_ru'],
            'token'=>str_replace('/','',Hash::make($token)),
          ]);
         return redirect('/service/view');
    }
          Service::create([
            'title_en' => $data['title_en'],
            'title_ar' => $data['title_ar'],
            'title_ru' => $data['title_ru'],
            'img' => null,
            'description_en' => $data['description_en'],
            'description_ar' => $data['description_ar'],
            'description_ru' => $data['description_ru'],
            'token'=>str_replace('/','',Hash::make($token)),
          ]);
         return redirect('/service/view');
}



 


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($token)
    {
      $service=Service::where('token',$token)->with('images')->first();
      return view('service_single',compact('service'));
    }


   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service,$token)
    {
        $service=Service::where('token',$token)->first();
        return view('admin.Services.edit',compact('service'));
    }


        public function view_ser($id)
    {
        $service=Service::find($id);
        return view('admin.Services.service_view',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$token)
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

        $new_service=Service::where('token',$token)->first();
        $new_service->title_ar=$data['title_ar'];
        $new_service->title_en=$data['title_en'];
        $new_service->title_ru=$data['title_ru'];
        $new_service->description_ar=$data['description_ar'];
        $new_service->description_en=$data['description_en'];
        $new_service->description_ru=$data['description_ru'];
        $new_service->img=$img_name;
        $new_service->save();
        return redirect('service/view');

            }
        }
        $new_service=Service::where('token',$token)->first();
            $img_name=$new_service->img;

        $new_service=Service::where('token',$token)->first();
        $new_service->title_ar=$data['title_ar'];
        $new_service->title_en=$data['title_en'];
        $new_service->title_ru=$data['title_ru'];
        $new_service->description_ar=$data['description_ar'];
        $new_service->description_en=$data['description_en'];
        $new_service->description_ru=$data['description_ru'];
        $new_service->img=$img_name;
        $new_service->save();
        return redirect('service/view');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }

    function set( Service $service , Request $request){
  $service->ar_title=$request['ar_title'];
  $service->en_title=$request['en_title'];
  $service->ar_description=$request['ar_description'];
  $service->en_description=$request['en_description'];
  $service->img=$request['img'];
  $service->save();
  //$currentuser->save();//
  return $service;
}


     public function delete($token)
     {
    $service=Service::where('token',$token)->first();
    $service->delete();
    return redirect('/service/view');
     }


public function getservices()
{
    $activities=Service::all();
    return $activities;
}


}
