<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Article.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

    	$title_en=$request['title_en'];
    	$description_en=$request['description_en'];
    	$token=$title_en.$description_en;
         Article::create([
            'title_en' => $request['title_en'],
            'title_ar' => $request['title_ar'],
            'title_ru' => $request['title_ru'],
            'description_en' => $request['description_en'],
            'description_ar' => $request['description_ar'],
            'description_ru' => $request['description_ru'],
            'token'=>str_replace('/','',Hash::make($token)),

          ]);
         return redirect('/article/view');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $articles=Article::all();
        return view('admin.Article.view',compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit($token)
    {
        $article=Article::where('token',$token)->first();
        return view('admin.Article.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$token)
    {
        $new_article=Article::where('token',$token)->first();
        $new_article->title_ar=$request['title_ar'];
        $new_article->title_en=$request['title_en'];
        $new_article->title_ru=$request['title_ru'];
        $new_article->description_ar=$request['description_ar'];
        $new_article->description_en=$request['description_en'];
        $new_article->description_ru=$request['description_ru'];
        $new_article->save();
        return redirect('/article/view');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
    }
           public function view_article($id)
    {
        $article=Article::find($id);
        return view('admin.Article.article_view',compact('article'));
    }


        function set( Article $article , Request $request){
  $article->title_ar=$request['title_ar'];
  $article->en_title=$request['title_en'];
  $article->en_title=$request['title_ru'];
  $article->description_ar=$request['description_ar'];
  $article->description_en=$request['description_en'];
    $article->description_en=$request['description_ru'];
  $article->save();
  //$currentuser->save();//
  return $offer;
}
     function getAllOffers()
     {
        $articles=Article::all();
        return $articles;

     }

     public function delete($token)
     {
    $article=Article::where('token',$token)->first();
    $article->delete();
    return redirect('article/view');
     }
     
}
