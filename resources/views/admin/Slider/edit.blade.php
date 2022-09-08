@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/slider/edit/{{$slider->id}}/' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">slider main title</label>
    <input name="title" value="{{$slider->title}}" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>

  <br><br>
  <button style="background-color:#990000;color:white" type="submit" class="btn">Edit slider Image</button>
</form>
@endsection