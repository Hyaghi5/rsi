@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/activity/edit/{{$activity->token}}' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">activity Title</label>
    <input value="{{$activity->title_en}}" name="title_en" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">عنوان الخدمة</label>
    <input value="{{$activity->title_ar}}" name="title_ar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>


    <div class="form-group">
    <label for="exampleInputEmail1">activity Title russian</label>
    <input value="{{$activity->title_ru}}" name="title_ru" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">description</label>
    <textarea name="description_en" class="form-control" rows="5" id="comment" required>{{$activity->description_en}}</textarea>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">توصيف الخدمة</label>
    <textarea name="description_ar" class="form-control" rows="5" id="comment" required>{{$activity->description_ar}}</textarea>
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">activity description russian</label>
    <textarea name="description_ru" class="form-control" rows="5" id="comment" required>{{$activity->description_ru}}</textarea>
    
  </div>


  <input  value="{{$activity->img}}" class="active" type="file" name="img" enctype="multipart/form-data">
  <br><br>
  <button style="background-color:#990000;color:white" type="submit" class="btn">Edit Service</button>
</form>
@endsection