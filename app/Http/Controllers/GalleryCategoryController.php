<?php

namespace App\Http\Controllers;

use App\GalleryCategory;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoies=GalleryCategory::all();
        return view('admin.Category.view',compact('categoies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        GalleryCategory::create([

            'title_ar'=>$request['title_ar'],
            'title_en'=>$request['title_en'],
            'title_ru'=>$request['title_ru'],
            'slag'=>$request['slag'],
        ]);
        return redirect('category/view');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery_Category  $gallery_Category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $gallery_category=GalleryCategory::find($id);
    return view('admin.Category.show',compact('gallery_category')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery_Category  $gallery_Category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=GalleryCategory::find($id);
        return view('admin.Category.edit',compact('category'));
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
            $category=GalleryCategory::find($id);
            $category->title_ar=$request['title_ar'];
            $category->title_en=$request['title_en'];
            $category->title_ru=$request['title_ru'];
            $category->slag=$request['slag'];
            $category->save();
        
        return redirect('category/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery_Category  $gallery_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryCategory $gallery_Category)
    {
        //
    }

    public function getcategory()
    {
        $categories=GalleryCategory::all();
        return $categories;
    }

    public function delete($id)
    {
        $category=GalleryCategory::find($id);
        $category->delete();
        return redirect('/category/view/');
    }
    
    public function main_view()
    {
        $gallery_category=GalleryCategory::with('getTitle')->get();
        return view('gallery',compact('gallery_category'));
    }

    
}
