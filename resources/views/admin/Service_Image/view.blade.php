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
<a href="/service_image/add/" class="btn" style="background-color:#990000;color:white">
Add new image to service</a>
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
          <th>Service Title</th>
          <th>عنوان الخدمة</th>
          <th>Service Title russian</th>
            <th>image</th>
          <th></th>
        
        </tr>
      </thead>
      <tfoot>
      </tfoot>
      <tbody>
        @foreach ($service_images as $service_image)
        <tr>
          <td><a style="color:rgba(204, 0, 0, 1);" href="/service/view/{{$service_image->id}}">{{$service_image->service->title_en}}</a></td>
          <td>{{$service_image->service->title_ar}}</td>
          <td>{{$service_image->service->title_ru}}</td>
            <td><img class="img-responsive col-xs-12 col-sm-12" src="/{{env('STORAGE_PATH')}}/{{$service_image->image}}"></td>
          <td><div  class="row"><a style="margin-left:5px;color:rgba(204, 0, 0, 1);;" href="/service_image/edit/{{$service_image->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a  style="margin-left:5px;color:rgba(204, 0, 0, 1);" onclick="return confirm('Are you sure you want to delete this service')" href="/service_image/delete/{{$service_image->id}}"><i class="fa fa-times" aria-hidden="true"></i></a></div>
          <div>
           </td>
            </tr>
            @endforeach
            {{$service_images->links()}}
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
@endsection
<!-- /.content-wrapper -->