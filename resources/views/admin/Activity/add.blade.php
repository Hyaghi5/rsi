@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/activity/add' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Activity Title</label>
    <input name="title_en" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>

 <div class="form-group">
    <label for="exampleInputEmail1">Activity Title russian</label>
    <input name="title_ru" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">عنوان النشاط</label>
    <input name="title_ar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Activity description</label>
    <textarea name="description_en" class="form-control" rows="5" id="comment" required></textarea>
    
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">Activity description russian</label>
    <textarea name="description_ru" class="form-control" rows="5" id="comment" required></textarea>
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">توصيف النشاط</label>
    <textarea name="description_ar" class="form-control" rows="5" id="comment" required></textarea>
    
  </div>
 
  <input class="active" type="file" name="img" enctype="multipart/form-data">
  <br><br>
  <button style="background-color:#990000;color:white" type="submit" class="btn">Add service</button>
</form>
@endsection