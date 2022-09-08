@extends('main_layout')
@section('content')

<section class="Gallery-section section2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-offset-1 col-md-10 col-xs-12">
                <div class="row">
                    <div class="head-title"> 
                        
                 
                           <h2> {{$cat->getTitle()}}</h2>
                      
                    </div>
                </div>
                <div class="row">
                  @php($i=1)
                  @foreach ($galleries as $gallery)
                    <div class="col-sm-3 col-xs-12">
                        <div class="service-container" data-toggle="modal" data-target="#myModal{{$i}}">
                            <div class="img-icon-service-container">
                                <div class="img-service-container">
                                    <img src="/storage/app/public/{{$gallery->image}}" class="img-responsive img-service-style" alt="service img mini{{$i}}">
                                </div>
                                <div class="icon-service-container">
                                  <i class="fa fa-search-plus "></i>                                </div>
                            </div>
                            <div class="service-text">
                                <h2> </h2>
                            </div>
                        </div>
                    </div>
                    @php($i++)
                  @endforeach
                    <!-- Modal -->
                                      @php($j=1);

                    @foreach ($galleries as $gallery)
<div id="myModal{{$j}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
 <img src="/storage/app/public/{{$gallery->image}}" class="img-responsive center-block img-service-style" alt="service img pop up{{$j}}">
      </div>
    
    </div>

  </div>
</div>
                     @php($j++)
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$('window').ready(function(){
    $('ul.nav.navbar-nav.navbar-right li').each(function(){
$('ul.nav.navbar-nav.navbar-right li').removeClass('active');
        $('ul.nav.navbar-nav.navbar-right li:nth-child(4)').addClass('active');
}); 
});
</script>

@endsection
