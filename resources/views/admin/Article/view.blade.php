@extends('admin.admin_layout')

<!-- Left side column. contains the logo and sidebar -->
<!-- Content Wrapper. Contains page content -->
@section('content')
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
      <a href="/article/add/" class="btn" style="background-color:rgba(204, 0, 0, 1);;color:white">
      Add new article</a>
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
                <th>article title</th>
                <th>название статьи</th>
                <th>عنوان المقالة</th>
                <th>article Description</th>
                <th>статья Описание</th>
                <th>توصيف المقالة</th>
                <th></th>
              </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
              @foreach ($articles as $article)
              <tr>
                <td><a href="/article/view/{{$article->token}}">{{$article->title_en}}</a></td>
                <td>{{$article->title_en}}</td>
                <td>{{$article->title_ru}}</td>
                <td>{{$article->title_ar}}</td>
                <td>{{$article->description_en}}</td>
                <td>{{$article->description_ru}}</td>
                <td>{{$article->description_ar}}</td>
                <td><div  class="row"><a style="margin-left:5px;color:rgba(204, 0, 0, 1);;" href="/article/edit/{{$article->token}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a  style="margin-left:5px;color:rgba(204, 0, 0, 1);;" onclick="return confirm('Are you sure you want to delete this article')" href="/article/delete/{{$article->token}}"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                <div>
                  <div class="row">
                    <a style="margin-left:5px;color:rgba(204, 0, 0, 1);;" href="/article/view/{{$article->token}}"><i class="fa fa-eye" aria-hidden="true"></i></a></div></td>
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