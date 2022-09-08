@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/SliderImage/add' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">slider main title</label>
    <input name="main_title_en"  type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">العنوان الرئيسي للمعرض</label>
    <input name="main_title_ar" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">slider main title russian</label>
    <input name="main_title_ru"  type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">slider sub title</label>
    <textarea rows="4" cols="50" name="sub_title_en" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required></textarea>
    
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">العنوان الفرعي للمعرض</label>
    <textarea rows="4" cols="50" name="sub_title_ar" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required></textarea> 
  </div>
  
   <div class="form-group">
    <label for="exampleInputEmail1">slider sub title russian</label>
    <textarea rows="4" cols="50" name="sub_title_ru" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required></textarea> 
  </div>

    <select class="form-control" id="sel1" name="father">
    @foreach ($sliders as $slider)
    <option value="{{$slider->id}}">{{$slider->title}}</option>
    @endforeach
    </select>
  <label for="exampleInputEmail1">Desktop Image</label>
  <input class="active"  type="file" name="desktop_image" enctype="multipart/form-data" required>
  <label for="exampleInputEmail1">Mobile Image</label>
  <input class="active" type="file"  name="mobile_image" enctype="multipart/form-data" required>
  <br><br>
  <button style="background-color:#990000;color:white" type="submit" class="btn">Add slider Image</button>
</form>
@endsection