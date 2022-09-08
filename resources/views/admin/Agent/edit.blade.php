@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/agent/edit/{{$agent->id}}' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">link</label>
    <textarea name="link" class="form-control" rows="5" id="comment" required>{{$agent->link}}</textarea>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input class="active" type="file" name="img" placeholder="{{$agent->img}}" enctype="multipart/form-data" required>
    @if($agent->img != NULL)
    
    <div class="image-name">{{$agent->img}}</div>
    @endif
  </div>
  <br><br>
  <img class="img-responsive col-xs-12 col-sm-4" src="/storage/{{$agent->img}}">
  <button style="background-color:#990000;color:white" type="submit" class="btn">Edit Agent</button>
</form>
<style type="text/css">
.image-name {
display: block;
position: absolute;
top: 26px;
background-color: #eceff4;
left: 95px;
width: 100px;
}
.form-group{
position: relative;
}
</style>
@endsection