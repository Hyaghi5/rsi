@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/page/add' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}


  <div class="form-group">
    <label for="exampleInputEmail1">Page name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Slag</label>
    <input name="slag" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Page Title</label>
    <input name="title_en" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
  </div>

 <div class="form-group">
    <label for="exampleInputEmail1">Page Title russian</label>
    <input name="title_ru" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">غنوان الصفحة</label>
    <input name="title_ar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Page description</label>
    <textarea  name="description_en" class="form-control" rows="5" id="summernote3" required></textarea>
    
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">Page description russian</label>
    <textarea name="description_ru" class="form-control" rows="5" id="summernote4" required></textarea>
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">توصيف الصفحة</label>
    <textarea name="description_ar" class="form-control" rows="5" id="summernote5" required></textarea>
    
  </div>
 
  <input class="active" type="file" name="img" enctype="multipart/form-data">
  <br><br>
  <button style="background-color:#990000;color:white" type="submit" class="btn">Add service</button>
</form>
@endsection