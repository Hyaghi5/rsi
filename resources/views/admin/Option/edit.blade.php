@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/option/edit/{{$option->id}}' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}





 <div class="form-group">
    <label for="exampleInputEmail1">Option Value</label>
      <textarea name="option_value" class="form-control" rows="5" id="comment" required>{{ $option->option_value}}</textarea>
  
  </div>  


     <br><br>

  <button style="background-color:#990000;color:white" type="submit" class="btn">Edit Category</button>
</form>  
@endsection