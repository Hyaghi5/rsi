<?php

namespace App\Http\Controllers;

use App\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
    {
        $options=Option::all();
        return view('admin.Option.view',compact('options'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Option.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Option::create([
            'option_name'=>$request['option_name'],
            'option_value'=>$request['option_value'],
        ]);
        return redirect('option/view');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery_Category  $gallery_Category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $option=Option::find($id);
    return view('admin.Option.show',compact('option')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery_Category  $gallery_Category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $option=Option::find($id);
        return view('admin.Option.edit',compact('option'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery_Category  $gallery_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
            $option=Option::find($id);
            $option_value=$option->option_value;
            $option->option_value=$option_value;
            $option->option_value=$request['option_value'];
            $option->save();
        return redirect('option/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery_Category  $gallery_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option)
    {
        //
    }

    public function getcategory()
    {
        $option=Option::all();
        return $option;
    }

    public function delete($id)
    {
        $option=Option::find($id);
        $option->delete();
        return redirect('/option/view/');
    }

    public function getsocial()
    {
    $json;
      $json['facebook']=Option::where('option_name','facebook')->first();
      $json['twitter']=Option::where('option_name','twitter')->first();
      $json['phone']=Option::where('option_name','phone')->first();
      $json['mail']=Option::where('option_name','mail')->first(); 
      $json['phone2']=Option::where('option_name','phone2')->first();
      $json['email2']=Option::where('option_name','email2')->first(); 
      $json['phone3']=Option::where('option_name','phone3')->first();
      $json['fax']=Option::where('option_name','fax')->first();
      $json['location']=Option::where('option_name','location')->first(); 
      $json['telegram']=Option::where('option_name','telegram')->first();
     


  return $json;
    }
}
