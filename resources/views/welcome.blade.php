@extends('main_layout')
@section('content')
<section class="section1 slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
           <ol class="carousel-indicators">
                        @php ($i = -1)
                        @foreach ($sliders as $slider)

                        {{-- expr --}}
                        @php ($i++)
                        @foreach ($slider->sons as $slider2)
                        <!-- you need aloop to draw indicator for each slider don't forget to start your loop with i=-1 to change data-slide-to="i" don't forget to put class active for first one -->
                        <li data-target="#carousel-desktop" data-slide-to="{{$i}}" class="{{$i!=0?'':'active'}}"></li>
                        @endforeach
                        @endforeach
                    </ol>
            

            <!-- Wrapper for slides -->
                <div class="carousel-inner">
                        <!-- you need aloop to draw side items for each slider don't forget to  put class active for first one and give the slider alter with image title -->
                        @php ($i = -1)
                        @foreach ($sliders as $slider)
                        @foreach ($slider->sons as $slider2)
                        @php ($i++)
                        
                        <div class="item {{$i!=0?'':'active'}}"> <img src="/storage/app/public/{{$slider2->desktop_img}}" alt="desktop-slide-{{$i}}" class="hidden-xs">
                            <img src="/storage/app/public/{{$slider2->mobile_img}}" alt="mobile-slide-{{$i}}" class="hidden-sm hidden-md hidden-lg">
                            <div class="carousel-caption">
                                <h2>{{$slider2->getmainTitle()}}</h2>
                                <p>{{$slider2->getsubTitle()}}</p>
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                    </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- end section1 -->
    <section class="section2" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                    <div class="row">
                        @foreach ($services as $service)
                        <div class="col-sm-3 col-xs-12">
                            <div class="service-container">
                                <div class="img-icon-service-container">
                                    <div class="img-service-container">
                                        <img src="/storage/app/public/{{$service->img}}" class="img-responsive img-service-style" alt="service 4">
                                    </div>
                                      <a href="/service/show/{{$service->token}}">
                                    <div class="icon-service-container">
                                   
                                          </div></a>
                                </div>
                                <div class="service-text">
                                   <h2>{{$service->getTitle()}}</h2>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section 2 -->
    <section class="section4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="head-line"> 
                        @if(Session::get('locale')=="en")
                        <h3 class="head-line-style">
                            Our Sign
                       </h3>
                       @elseif(Session::get('locale')=="ar")
                        <h3 class="head-line-style">
                            شعارنا
                       </h3>
                       @else
                       <h3 class="head-line-style">
                            НАША ЗНАК
                       </h3>
                       @endif
                    </div>
                </div>
                <div class="row">
                    <div class="main-text">

                        @if(Session::get('locale')=="en")
                         <h4 class="main-text-style">
                                Leadership in Investment and project development
                       </h4>
                       @elseif(Session::get('locale')=="ar")
                        
                         <h4 class="main-text-style">
                                القيادة في الاستثمار وتطوير المشاريع

                       </h4>
                       @else
                       
                         <h4 class="main-text-style">
                                Лидерство в области инвестиций и разработки проектов
                       </h4>
                       @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
    <!-- end section4 -->
    <section class="section3">
    <div class="container-fluid">
        <div class="row">
            <div class="owl-carousel">
                    @foreach ($sliders2 as $slider2)
                    @foreach ($slider2->sons as $slider)
                <div>
                    <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12 card-item">
                        <div class="row">
                            <div class="head-line">
                                <div class="icon-container">
                                    <img class="icon-img img-responsive" alt="our-vision-icon" src="/storage/app/public/{{$slider->desktop_img}}">
                                </div>
                        <h3 class="head-line-style">
                            {{$slider->getmainTitle()}}
                        </h3></div>
                        </div>
                        <div class="row">
                            <div class="main-text">
                                <h4 class="main-text-style">
                                  {!!$slider->getsubTitle()!!}  
                    </h4>
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach
                @endforeach
            </div>
        </div>
    </div>
</section>
    <!-- end section3 --> 
    <section class="contact-us section5">
     <div class="container-fluid">
        <div class="row map-contact-container">
            <div class="col-xs-12 col-sm-offset-1 col-sm-10 map-container">
            <div id="map"></div>
            </div>
         </div>
        </div>
    </section>
    <!-- end section -->
    <section class="our-partner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-offset-1 col-md-10 col-xs-12">
                    <div class="row partner-container">
                    @foreach ($agents as $agent) 
                        <div class="col-xs-6 col-sm-3 col-md-2">
                          <span>
                            <img class="img-responsive logo-partner" alt="logo partner 10" src="/storage/app/public/{{$agent->img}}">
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2ExbfgF70ZmxzOlzKnTZ7MdGlhc3wtcA&callback=initMap">
    </script> 
    
    <script>
          
    function initMap() { 
  var uluru =  new google.maps.LatLng(33.4930206,36.2342053); 
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 14, center: uluru,
                                      styles: [
            {elementType: 'geometry', stylers: [{color: '#828282'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#828282'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#f3f3f3'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#efefef'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#efefef'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#565656'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#00204c'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#f3f3f3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#efefef'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#00204c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#00204c'}]
            }
          ]
                                      }); 
  var marker = new google.maps.Marker({position: uluru, map: map});
}  
  
</script>
@endsection  
