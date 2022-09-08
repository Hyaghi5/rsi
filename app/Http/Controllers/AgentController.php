<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;
use Illuminate\Support\Facades\Storage;

class AgentController extends Controller
{
    

    public function index()
    {
        $agents=Agent::paginate(2);
        return view('admin.Agent.view',compact('agents'));
    }

    public function create()
    {
        return view('admin.Agent.add');
    }

    public function store(Request $request)
    {  

        $data=$request->all();
      if($request->file('img')!= null){

            $path;
            if(request()->file('img')->isValid()){
                $path = $request->file('img')->storeAs(env('APP_PATH'), time().'.jpg');
                $img_name=str_replace('public/', '', $path);
                if(empty($path)){
                    return response()->json([],400);
                }

            }

         Agent::create([
            'link' => $data['link'],
            'img' => $img_name,

          ]);
         return redirect('/agent/view');
    }
    return response()->json([],400);
}


public function edit($id)
{
    $agent=Agent::find($id);
    return view('admin.Agent.edit',compact('agent'));
}
   public function update(Request $request,$id)
    {  

        $data=$request->all();
      if($request->file('img')!= null){

            $path;
            if(request()->file('img')->isValid()){
                $path = $request->file('img')->storeAs(env('APP_PATH'), time().'.jpg');
                $img_name=str_replace('public/', '', $path);
                if(empty($path)){
                    return response()->json([],400);
                }

            }

            $agent=Agent::find($id);
            $agent->link = $data['link'];
            $agent->img= $img_name;
            $agent->save();

  
         return redirect('/agent/view');
    }
    return response()->json([],400);
}

public function delete($id)
{
    $agent=Agent::find($id);
    $agent->delete();
    return redirect('agent/view');
}

}
