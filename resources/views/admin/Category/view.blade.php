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
<a href="/category/add/" class="btn" style="background-color:#990000;color:white">
Add new category</a>
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
          <th>category Title</th>
          <th>категория Название</th>
          <th>عنوان الخدمة</th>
          <th></th>
        </tr>
      </thead>
      <tfoot>
      </tfoot>
      <tbody>
        @foreach ($categoies as $category)
        <tr>
          <td><a style="color:#990000" href="/category/view/{{$category->id}}">{{$category->slag}}</a></td>
          <td>{{$category->title_ru}}</td>
          <td>{{$category->title_ar}}</td>
          <td><div  class="row"><a style="margin-left:5px;color:#990000;" href="/category/edit/{{$category->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a  style="margin-left:5px;color:#990000;" onclick="return confirm('Are you sure you want to delete this category')" href="/category/delete/{{$category->id}}"><i class="fa fa-times" aria-hidden="true"></i></a></div>
          <div>
            <div class="row">
              <a  style="margin-left:5px;color:#990000;" href="/category/add_sub/{{$category->id}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
              <a style="margin-left:5px;color:#990000;" href="/category/view_sub/{{$category->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a></div></td>
            </tr>
            @endforeach
            
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