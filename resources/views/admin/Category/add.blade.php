@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/category/add' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Category Title</label>
    <input name="title_en" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Category Title russian</label>
    <input name="title_ru" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">عنوان الخدمة</label>
    <input name="title_ar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">Slag</label>
      <textarea name="slag" class="form-control" rows="5" id="comment" required></textarea>
    
  </div>  


     <br><br>

  <button style="background-color:#990000;color:white" type="submit" class="btn">Add Category</button>
</form>  
@endsection