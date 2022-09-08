@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/SliderImage/edit/{{$slider->id}}/' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">slider main title</label>
    <input name="main_title_en" value="{{$slider->main_title_en}}" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">العنوان الرئيسي للمعرض</label>
    <input name="main_title_ar" type="text" value="{{$slider->main_title_ar}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>


    <div class="form-group">
    <label for="exampleInputEmail1">slider main title russian</label>
    <input name="main_title_ru"  type="text"  value="{{$slider->main_title_ru}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">slider sub title</label>
    <input name="sub_title_en" type="text" value="{{$slider->sub_title_en}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">العنوان الفرعي للمعرض</label>
    <input name="sub_title_ar" type="text" value="{{$slider->sub_title_ar}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>


   <div class="form-group">
    <label for="exampleInputEmail1">slider sub title russian</label>
    <input name="sub_title_ru" type="text" value="{{$slider->sub_title_ru}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" required>
    
  </div>


<div class="form-group">
  <label for="exampleInputEmail1">desktop image</label>
  <div class="input-name-container">
  <input class="active" type="file" value="{{$slider->desktop_img}}" name="desktop_image" enctype="multipart/form-data"  >
    @if($slider->desktop_img != NULL)
  <div class="img-name">{{$slider->desktop_img}}</div>
@endif
</div>

</div>
<div class="form-group">
  <label for="exampleInputEmail1">Mobile Image</label>
  <div class="input-name-container">
  <input class="active" type="file" value="{{$slider->mobile_img}}" name="mobile_image" enctype="multipart/form-data"  >
  @if($slider->mobile_img != NULL)
  <div class="img-name">{{$slider->mobile_img}}</div>
@endif

<select class="form-control" id="sel1" name="father">
    @foreach ($fathers as $father)
    <option value="{{$father->id}}">{{$father->title}}</option>
    @endforeach
    <option value=0>Father</option>
  </select>
</div>
</div>
  <br><br>
  <button style="background-color:#990000;color:white" type="submit" class="btn">Edit slider Image</button>
</form>
@endsection