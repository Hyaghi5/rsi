@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/article/edit/{{$article->token}}' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Article Title</label>
    <input value="{{$article->title_en}}" name="title_en" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Article Title russian</label>
    <input value="{{$article->title_ru}}" name="title_ru" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">عنوان العرض</label>
    <input value="{{$article->title_ar}}" name="title_ar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title">
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Offer Description</label>
    <textarea name="description_en" class="form-control" rows="5" id="comment">{{$article->description_en}}</textarea>
    
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Offer Description russian</label>
    <textarea name="description_ru" class="form-control" rows="5" id="comment">{{$article->description_ru}}</textarea>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">تفاصيل العرض</label>
    <textarea name="description_ar" class="form-control" rows="5" id="comment">{{$article->description_ar}}</textarea>
  </div>
  <br><br>
  <button style="background-color:#990000;color:white" type="submit" class="btn">Edit Offer</button>
</form>
@endsection