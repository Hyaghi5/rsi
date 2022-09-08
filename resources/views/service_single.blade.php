@extends('main_layout')
@section('content')
 <section class="service-section content-section">
    <div class="col-sm-offset-1 col-sm-12 col-xs-12 col-md-offset-1 col-md-10">
        <div class="row">
        <div class="col-xs-12">
            <div class="head-line">
            <h2>{{$service->getTitle()}}</h2>
            </div>
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12">
            <div class="main-text">
            <h2>{!!$service->getDescription()!!}</h2>
            </div>
            </div>
        </div>
        </div> 
    <section class="section2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                    <div class="row">
                        @foreach ($service->images as $image)
                            {{-- expr --}}
                        
                        <div class="col-sm-3 col-xs-12">
                            <div class="service-container">
                                <div class="img-icon-service-container">
                                    <div class="img-service-container">
                                        <img src="/storage/app/public/{{$image->image}}" class="img-responsive img-service-style" alt="service 4">
                                    </div>
                                    <div class="icon-service-container">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div> 
                             
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
    <!-- end service-section -->
<script>
$('document').ready(function(){
    $('ul.nav.navbar-nav.navbar-right li').each(function(){
$('ul.nav.navbar-nav.navbar-right li').removeClass('active');
        $('ul.nav.navbar-nav.navbar-right li:nth-child(5)').addClass('active');
}); 
});
</script>
@endsection