@extends('layouts.master')
@section('assets')
 <!-- Your custom styles (optional) -->
  <link href="{{URL::to('css/style.css')}}" rel="stylesheet">
  <link href="{{URL::to('css/queries.css')}}" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

@endsection
@section('content')
@isset($room)
<p>{{$room->id}}</p>
<p>{{$room->type}}</p>
<p>{{$room->max_adults}}</p>
<p>{{$room->id}}</p>
<a href="{{route('order', ['roomNo'=>$room['room_number']])}}">Order</a>
@endisset
<div id="top" class="container-fluid parallax">
  <div class="item">
    <h1 class="display-3" data-wow-delay="0.3s">Rooms &nbsp;& &nbsp;Suites</h1>
    <p>While our hotel has a standard set of room types, there's absolutely nothing standard about them! Each single room, double or family room, each suite we offer is enhanced with a little extra of its own! The intricate and elegant, but at the same time comfortable interior and exterior of the hotel make your stay here a blast! Additionally, all the amenities that we have, hotel-wide WiFI & our incredible eat & drink venues will be a cherry on the top!</p>
  </div>
</div>

<div class="container">
  <div class="single row">
    <div class="col-lg-6">
      <h3 class="h3single">Single Room</h3>
      <p>Enjoy our classic suites with all the elegancy and comfort that its interior has… It features such essentials as a flat-screen 45″ TV, WiFi and 2 bathrooms with a living room and 2 bedrooms, big and chic enough to be counted as real suite bedrooms!</p>
      <h4 class="h4single">Prices start at</h4>
      <div class="item-value"><sup>$</sup><strong class="item-price">99</strong><strong class="price"> / per night</strong></div>
      <ul class="list-marked">
        <li>Adults: 1</li>
        <li>Facilites:Bathroom tub and shower and hair Dryer, Digital Personal Safe, Free high speed Wi-Fi and cable internet access, HD flat-screen TV (including Satellite TV)</li>
        <li>Size: 35m²</li>
        <li>Bed Type: One single bed</li>
        <li>Categories:Single</li>
      </ul><a class="btn btn-primary button" href="#">Book now!</a>
    </div>
      
    <div class="col-lg-6">
      <div id="demo-2" class="carousel slide karusel" data-ride="carousel">
        
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo-2" data-slide-to="0" class="active"></li>
          <li data-target="#demo-2" data-slide-to="1"></li>
          <li data-target="#demo-2" data-slide-to="2"></li>
        </ul>
          
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active view overlay zoom">
            <img width="100%" src="{{URL::to('css/img/1.jpg')}}" alt="" width="650" height="490">
          </div>
          <div class="carousel-item view overlay zoom">
            <img width="100%" src="{{URL::to('css/img/2.jpg')}}" alt="" width="650" height="490">
          </div>
          <div class="carousel-item view overlay zoom">
            <img width="100%" src="{{URL::to('css/img/3.jpg')}}" alt="" width="650" height="490">
          </div>
        </div>
          
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo-2" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo-2" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </div>
</div>
  
<div class="container">
  <div class="single row flex-lg-row-reverse">
    <div class="col-lg-6">
      <h3 class="h3single">Double Room</h3>
      <p>This is the ultimate double room, enhanced with 2 king sized beds, a flat TV and a spacious area, which will be more than enough for a company of two...</p>
      <h4 class="h4single">Prices start at</h4>
      <div class="item-value"><sup>$</sup><strong class="item-price">145</strong><strong class="price"> / per night</strong></div>
      <ul class="list-marked">
        <li>Adults: 3</li>
        <li>Facilites:Closet with hangers, Digital Personal Safe,HD flat-screen TV (including Satellite TV), Telephone</li>
        <li>Size: 30m²</li>
        <li>Bed Type: One bed</li>
        <li>Categories:Double,Single</li>
      </ul><a class="btn btn-primary button" href="#">Book now!</a>
    </div>
      
    <div class="col-lg-6">
      <div id="demo-3" class="carousel slide karusel" data-ride="carousel">
        
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo-3" data-slide-to="0" class="active"></li>
          <li data-target="#demo-3" data-slide-to="1"></li>
          <li data-target="#demo-3" data-slide-to="2"></li>
        </ul>
          
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active view overlay zoom">
            <img width="100%" src="{{URL::to('css/img/room-2.jpg')}}" alt="" width="650" height="490">
          </div>
          <div class="carousel-item view overlay zoom">
            <img width="100%" src="{{URL::to('css/img/room-3.jpg')}}" alt="" width="650" height="490">
          </div>
          <div class="carousel-item view overlay zoom">
            <img width="100%" src="{{URL::to('css/img/room-5.jpg')}}" alt="" width="650" height="490">
          </div>
        </div>
          
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo-3" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo-3" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="single row">
    <div class="col-lg-6">
      <h3 class="h3single">Family Room</h3>
      <p>Enjoy our classic suites with all the elegancy and comfort that its interior has… It features such essentials as a flat-screen 45″ TV, WiFi and 2 bathrooms with a living room and 2 bedrooms, big and chic enough to be counted as real suite bedrooms!</p>
      <h4>Prices start at</h4>
      <div class="item-value"><sup>$</sup><strong class="item-price">195</strong><strong class="price"> / per night</strong></div>
      <ul class="list-marked">
        <li>Adults: 2</li>
        <li>Facilites:Closet with hangers, Digital Personal Safe, Free high speed Wi-Fi and cable internet access</li>
        <li>Size: 25m²</li>
        <li>Bed Type: One bed</li>
        <li>Categories:<a href="rooms-search-results.html">Double</a></li>
      </ul><a class="btn btn-primary button" href="#">Book now!</a>
    </div>
      
    <div class="col-lg-6">
      <div id="demo" class="carousel slide karusel" data-ride="carousel">
        
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
          
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active view overlay zoom">
            <img width="100%" src="{{URL::to('css/img/4.jpg')}}" alt="" width="650" height="490">
          </div>
          <div class="carousel-item view overlay zoom">
            <img width="100%" src="{{URL::to('css/img/5.jpg')}}" alt="" width="650" height="490">
          </div>
          <div class="carousel-item view overlay zoom">
            <img width="100%" src="{{URL::to('css/img/6.jpg')}}" alt="" width="650" height="490">
          </div>
        </div>
          
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </div>
</div>
<a href="#" class="scrollToTop"><i class='fas fa-arrow-circle-up'></i></a>
@endsection