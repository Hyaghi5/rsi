@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/category/edit/{{$category->id}}' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Category Title</label>
    <input name="title_en" type="text" class="form-control" value="{{$category->title_en}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">عنوان الخدمة</label>
    <input name="title_ar" type="text" class="form-control" value="{{ $category->title_ar }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Category Title russian</label>
    <input  value="{{$category->title_ru }}"  name="title_ru" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">Slag</label>
      <textarea name="slag" class="form-control" rows="5" id="comment" required>{{ $category->slag}}</textarea>
    
  </div>  


     <br><br>

  <button style="background-color:#990000;color:white" type="submit" class="btn">Edit Category</button>
</form>  
@endsection