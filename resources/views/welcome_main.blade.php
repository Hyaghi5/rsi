@extends('main_layout')
@section('content')
<style>
header,footer {
    display: none;
}

.logo-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-items: center;
    align-self: center;
    align-content: center;
    position: relative;
}


section.logo-section {
    display: flex;
    align-items: center;
    height: 100vh;
    background: #112851;
}


body {
    background: none;
    background-color: #fff;
}
    .logo-container a {
    color: #112851;
    background: #fff;
    padding: 10px;
    margin: 25px;
    border: 1px solid #0a002d;
    border-radius: 3px;
    font-family: firstFont;
    font-size: 18px;
    cursor: pointer;
}

 
.logo-container a:hover {
    color: #fff;
    background: #333d8f;
    cursor: pointer;
}
 
.logo-img-container {
    background: #fff;
    width: 400px;
    height: 400px;
    display: flex;
    align-items: center;
    border-radius: 50%;
    box-shadow: inset 11px 2px 10px rgba(208, 208, 208, 0.5294117647058824);
}
</style>
<section class="logo-section">
    <div class="container-fluid">
        <div class="logo-container">
            <div class="logo-img-container">
        <img class="img-logo-animation img-responsive" alt="logo-animation" src="{{asset('img/logo (2).gif')}}">
                </div>
            <a href="/index">Go To website</a>
        </div>
    </div>
</section>
@endsection
