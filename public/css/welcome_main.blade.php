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
    background: #a2c8db;
}


body {
    background: none;
    background-color: #fff;
}
    .logo-container a {
    color: #fff;
    background: #1c066e;
    padding: 10px;
    margin: 25px;
    border: 1px solid #0a002d;
    border-radius: 3px;
    font-family: firstFont;
    font-size: 18px;
    cursor: pointer;
}

 
.logo-container a:hover {
    background: #0b0035;
    cursor: pointer;
}

</style>
<section class="logo-section">
    <div class="container-fluid">
        <div class="logo-container">
        <img class="img-logo-animation img-responsive" alt="logo-animation" src="{{asset('img/logo.gif')}}">
            <a href="/index">Go To website</a>
        </div>
    </div>
</section>
@endsection
