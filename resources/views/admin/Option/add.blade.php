@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/option/add' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Option Name</label>
    <input name="option_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>




 <div class="form-group">
    <label for="exampleInputEmail1">Option Value</label>
      <textarea name="option_value" class="form-control" rows="5" id="comment" required></textarea>
    
  </div>  


     <br><br>

  <button style="background-color:#990000;color:white" type="submit" class="btn">Add Option</button>
</form>  
@endsection