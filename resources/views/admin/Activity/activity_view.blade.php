@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/service/add' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">service Title</label>
    <input value="{{$service->title_en}}" name="title_en" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" disabled>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">عنوان الخدمة</label>
    <input value="{{$service->title_ar}}" name="title_ar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Title" disabled>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">description</label>
    <textarea name="description_en" class="form-control" rows="5" id="comment" disabled>{{$service->description_en}}</textarea>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">توصيف الخدمة</label>
    <textarea name="description_ar" class="form-control" rows="5" id="comment" disabled>{{$service->description_ar}}</textarea>
    
  </div>
  <br><br>
</form>
<script>
$('document').ready(function(){
    $('ul.nav.navbar-nav.navbar-right li').each(function(){
$('ul.nav.navbar-nav.navbar-right li').removeClass('active');
        $('ul.nav.navbar-nav.navbar-right li:nth-child(5)').addClass('active');
}); 
});
</script>
@endsection
