<!DOCTYPE html>
<html>
  <head>
    @php($title="R.S.I")
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('/admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <!-- Ionicons -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/admin/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/admin/css/all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('/admin/css/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('/admin/css/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('/admin/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('/admin/css/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('/admin/css/bootstrap3-wysihtml5.min.css')}}">

    <link rel="stylesheet" href="{{asset('/admin/css/gallery.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/admin.css')}}">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <header class="main-header">
    <!-- Logo -->
    <a style="background-color:rgba(204, 0, 0, 1);" href="/admin_page" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>{{$title}}</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav style="background-color:rgba(204, 0, 0, 1);" class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span id="count" class="label label-success">4</span>
            </a>
            <ul style="width:400px;" class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul style="width:400px;" id="apps" class="menu">
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="/application/view">See All Applications</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                  <a href="#">
                    <h3>
                    Design some buttons
                    <small class="pull-right">20%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                <a href="#">
                  <h3>
                  Create a nice theme
                  <small class="pull-right">40%</small>
                  </h3>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                      aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">40% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
              <li><!-- Task item -->
              <a href="#">
                <h3>
                Some task I need to do
                <small class="pull-right">60%</small>
                </h3>
                <div class="progress xs">
                  <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </a>
            </li>
            <!-- end task item -->
            <li><!-- Task item -->
            <a href="#">
              <h3>
              Make beautiful transitions
              <small class="pull-right">80%</small>
              </h3>
              <div class="progress xs">
                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                  aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                  <span class="sr-only">80% Complete</span>
                </div>
              </div>
            </a>
          </li>
          <!-- end task item -->
        </ul>
      </li>
      <li class="footer">
        <a href="#">View all tasks</a>
      </li>
    </ul>
  </li>
  <!-- User Account: style can be found in dropdown.less -->
  <li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <img src="{{asset('/admin/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
      <span class="hidden-xs">Admin</span>
    </a>
    <ul  class="dropdown-menu">
      <!-- User image -->
      <li style="background-color:#990000" class="user-header">
        <img src="{{asset('/admin/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        <p>
          Admin
        </p>
      </li>
      <!-- Menu Body -->
      <!-- Menu Footer-->
      <li class="user-footer">
        <div class="pull-right">
          <a href="{{ route('logout')}}" class="nav-link" data-toggle="modal" data-target="#exampleModal"onclick="event.preventDefault();">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </div>
      </li>
    </ul>
  </li>
  <!-- Control Sidebar Toggle Button -->
  
  <li>
    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
  </li>
</ul>
</div>
</nav>
</header>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{asset('/admin/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Admin</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
        </button>
      </span>
    </div>
  </form>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li>
      <a href="/service/view/">
        <i class="fa fa-dashboard"></i> <span>Services</span>
      </a>
    </li>
    <li>
      <a href="/service_image/view/">
        <i class="fa fa-dashboard"></i> <span>Service Image</span>
      </a>
    </li>
    <li>
      <a href="/article/view/">
        <i class="fa fa-coffee" aria-hidden="true"></i> <span>Articles</span>
      </a>
    </li>
<li>
          <a href="/slider/view/">
        <i class="fa fa-book"></i> <span>Slider</span>
      </a>
    </li>

        <li>
      <a href="/gallery/view/">
        <i class="fa fa-book"></i> <span>Gallery Content</span>
      </a>
    </li>
    <li>
      <a href="/category/view/">
        <i class="fa fa-book"></i> <span>Gallery Category</span>
      </a>
    </li>
    
    <li>
      <a href="/agent/view/">
        <i class="fa fa-book"></i> <span>Our Clients</span>
      </a>
    </li>


      <li>
      <a href="/option/view/">
        <i class="fa fa-book"></i> <span>Option</span>
      </a>
    </li>

  <li>
      <a href="/page/view/">
        <i class="fa fa-book"></i> <span>Pages</span>
      </a>
    </li>


  </ul>
</section>
<!-- /.sidebar -->
</aside>
<div class="content-wrapper">
@yield('content')
</div>
</div>
<footer class="main-footer">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/admin/js/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('/admin/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('/admin/js/raphael.min.js')}}"></script>
{{-- <script src="{{asset('/admin/js/morris.min.js')}}"></script> --}}
<!-- Sparkline -->
<script src="{{asset('/admin/js/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('/admin/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('/admin/js/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('/admin/js/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('/admin/js/moment.min.js')}}"></script>
<script src="{{asset('/admin/js/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('/admin/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('/admin/js/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('/admin/js/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('/admin/js/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/admin/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/admin/js/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/admin/js/demo.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
  $('#summernote').summernote();
  $('#summernote1').summernote();
  $('#summernote2').summernote();
  $('#summernote3').summernote();
  $('#summernote4').summernote();
  $('#summernote5').summernote();
  $('#summernote6').summernote();
  $('#summernote7').summernote();
  $('#summernote8').summernote();
});
</script>
<!-- Firebase App is always required and must be first -->
<div class="pull-right hidden-xs">
<b>Version</b> 2.4.0
</div>
<strong>Copyright &copy; 2018 <a href="https://adminlte.io">WAAPTECH</a>.</strong> All Rights
Reserved.
</footer>
</body>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">×</span>
  </button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
  <button style="background-color:#990000;color:white;" class="btn" onclick="document.getElementById('logout-form').submit();">Log out</button>
  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form> 
</div>
</div>
</div>
</div>
</html>