@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/page/edit/{{$page->id}}' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}


   <div class="form-group">
    <label for="exampleInputEmail1">Page name</label>
    <input value="{{$page->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Slag</label>
    <input value="{{$page->slag}}" name="slag" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">service Title</label>
    <input value="{{$page->title_en}}" name="title_en" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">عنوان الخدمة</label>
    <input value="{{$page->title_ar}}" name="title_ar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>


    <div class="form-group">
    <label for="exampleInputEmail1">service Title russian</label>
    <input value="{{$page->title_ru}}" name="title_ru" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">description</label>
    <textarea name="description_en" class="form-control" rows="5" id="summernote3" required>{{$page->description_en}}</textarea>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">توصيف الخدمة</label>
    <textarea name="description_ar" class="form-control" rows="5" id="summernote4" required>{{$page->description_ar}}</textarea>
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">description russian</label>
    <textarea name="description_ru" class="form-control" rows="5" id="summernote5" required>{{$page->description_ru}}</textarea>
    
  </div>


  <input  value="{{$page->img}}" class="active" type="file" name="img" enctype="multipart/form-data">
  <br><br>
  <button style="background-color:#990000;color:white" type="submit" class="btn">Edit Service</button>
</form>
@endsection