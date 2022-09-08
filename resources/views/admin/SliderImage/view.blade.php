@extends('admin.admin_layout')

<!-- Left side column. contains the logo and sidebar -->
<!-- Content Wrapper. Contains page content -->
@section('content')
<passport-clients></passport-clients>
<passport-authorized-clients></passport-authorized-clients>
<passport-personal-access-tokens></passport-personal-access-tokens>
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
Data Tables
<small>advanced tables</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#">Tables</a></li>
<li class="active">Data tables</li>
</ol>
</section>
<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-xs-12">
<a href="/SliderImage/add/" class="btn" style="background-color:rgba(204, 0, 0, 1);color:white">
Add new Image To Slider</a>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Hover Data Table</h3>
  </div>
  <!-- /.box-header -->
  <!-- /.box-body -->
</div>
<!-- /.box -->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Gallery main Title</th>
          <th>gallery sub title</th>
          <th>Desktop Image</th>
          <th>Mobile Image</th>
          <th></th>
        </tr>
      </thead>
      <tfoot>
      </tfoot>
      <tbody>
        @foreach ($sliders as $slider)
        <tr>
          <td><a style="color:#990000" href="/gallery/show/{{$slider->id}}">{{$slider->main_title_en}}</a></td>
          <td>{!!$slider->sub_title_en!!}</td>
          <td><img class="img-responsive" src="/{{env('STORAGE_PATH')}}/{{$slider->desktop_img}}"></td>
          <td><img class="img-responsive" src="/{{env('STORAGE_PATH')}}/{{$slider->mobile_img}}"></td>
          <td><div  class="row"><a style="margin-left:5px;color:#990000;" href="/SliderImage/edit/{{$slider->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a  style="margin-left:5px;color:#990000;" onclick="return confirm('Are you sure you want to delete this image from gallery')" href="/SliderImage/delete/{{$slider->id}}"><i class="fa fa-times" aria-hidden="true"></i></a></div>
          <div>
          </tr>
          @endforeach
          {{$sliders->links()}}
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
@endsection
<!-- /.content-wrapper -->