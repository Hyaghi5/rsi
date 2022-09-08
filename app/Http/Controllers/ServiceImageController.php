<?php

namespace App\Http\Controllers;

use App\Service_image;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_images=Service_image::paginate(2);
        return view('admin.Service_Image.view',compact('service_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Service::all();
        return view('admin.Service_Image.add',compact('services'));
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
      if($request->file('img')!= null){

            $path;
            if(request()->file('img')->isValid()){
               $path = $request->file('img')->storeAs('public', time().'.jpg');
                $img_name=str_replace('public/', '', $path);

                if(empty($path)){
                    return response()->json([],400);
                }

            }

         Service_image::create([
            'image' => $img_name,
            'service_id' => $data['service'],
          ]);
         return redirect('/service_image/view');
    }
                 Service_image::create([
            'image' => Null,
            'service_id' => $data['service'],
          ]);

         return redirect('/service_image/view');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Service_image  $service_image
     * @return \Illuminate\Http\Response
     */
    public function show(Service_image $service_image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service_image  $service_image
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services=Service::all();
        $service_image=Service_image::find($id);
        return view('admin.Service_Image.edit',compact('service_image','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service_image  $service_image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
             $data=$request->all();
             $new_service=Service_image::find($id);
      if($request->file('img')!= null){

        Storage::delete('/public/'.$new_service->image);
            $path;
            if(request()->file('img')->isValid()){
             $path = $request->file('img')->storeAs('public', time().'.jpg');
                $img_name=str_replace('public/', '', $path);
                if(empty($path)){
                    return response()->json([],400);
                }
         $data['img'] = '/storage/'.$data['img'];
       
        $new_service->service_id=$data['service'];

        $new_service->image=$img_name;
        $new_service->save();
        return redirect('service_image/view');

            }
        }
            $img_name=$new_service->image;
      $new_service->service_id=$data['service'];
        $new_service->image=$img_name;
        $new_service->save();
        return redirect('service_image/view');
          
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service_image  $service_image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service_image $service_image)
    {
        //
    }


    public function delete($id)
    {
        $service_image=Service_image::find($id);
        $service_image->delete();
        return redirect('/service_image/view');
    }
}
