@extends('main_layout')
@section('content')
     <section class="article-section content-section">
    <div class="col-sm-offset-1 col-sm-10 col-xs-12 col-md-offset-1 col-md-10">
        <div class="row">
        <div class="col-xs-12">
            <div class="head-line">
           <h2>{{$page->getTitle()}}</h2>
            </div>
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12">
            <div class="main-text">
            
            <h2>
                <div class="img-director" align="Top">
         <img class="img-responsive  founder-card "  src="/storage/app/public/{{$page->image}}"    alt="img director">
         @if(Session::get('locale')=="en")
                        <div class="founder-name">Nayef abu Zeineh</div>



<div class="job-title">General Manager</div>
@elseif(Session::get('locale')=="ar")
<div class="founder-name">نايف ابو زينة</div>



<div class="job-title">المدير العام</div>
@else
<div class="founder-name">Найеф Абу Зейнех</div>



<div class="job-title">Генеральный директор</div>
@endif
        </div>
                {!!$page->getDescription()!!}
                </h2>
            </div>
            </div>
        </div>
        </div>
    </section>
<script>
$('document').ready(function(){
    $('ul.nav.navbar-nav.navbar-right li').each(function(){
$('ul.nav.navbar-nav.navbar-right li').removeClass('active');
        $('ul.nav.navbar-nav.navbar-right li:nth-child(3)').addClass('active');
});
    
});
</script>
@endsection
