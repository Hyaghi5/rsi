@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/gallery/add' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  
  <div class="form-group">
    <label for="exampleInputEmail1">Gallery Category</label>
    <select  id="cat_id" name="cat_id"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="gallery_category_id" required>
      @foreach($gallery_categories as $gallery_category)
      <option value="{{$gallery_category->id}}">{{$gallery_category->title_en}}</option>
      @endforeach
    </select>
  </div>
  <label for="exampleInputEmail1">Gallery Images</label>
  <input class="active" type="file" name="image[]" enctype="multipart/form-data" required multiple>
  <br><br>
  <button style="background-color:#990000;color:white" type="submit" class="btn">Add service</button>
</form>
@endsection