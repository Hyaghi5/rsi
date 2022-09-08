@extends('main_layout')
@section('content')
     <section class="article-section content-section">
    <div class="col-sm-offset-1 col-sm-10 col-xs-12 col-md-offset-1 col-md-10">
        <div class="row">
        <div class="col-xs-12">
            <div class="head-line">
                <h2>{{$article->getTitle()}}</h2>
            </div>
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12">
            <div class="main-text">
              <h2>  {!!$article->getDescription()!!}</h2>
            </div>
            </div>
        </div>
        </div>
    </section>
<script>
$('document').ready(function(){
    $('ul.nav.navbar-nav.navbar-right li').each(function(){
$('ul.nav.navbar-nav.navbar-right li').removeClass('active');
        $('ul.nav.navbar-nav.navbar-right li:nth-child(2)').addClass('active');
}); 
});
</script>
@endsection


