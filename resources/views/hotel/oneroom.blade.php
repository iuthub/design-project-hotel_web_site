@extends('layouts.master')
@section('assets')
 <!-- Your custom styles (optional) -->
  <link href="{{URL::to('css/style.css')}}" rel="stylesheet">
  <link href="{{URL::to('css/queries.css')}}" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

@endsection
@section('content')
<br>
<div class="container">
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
      <div class="item-value"><sup>$</sup><strong class="item-price">{{$room->cost}}</strong><strong class="price"> / per night</strong></div>
      <ul class="list-marked">
        <li>Adults: {{$room->max_adults}}</li>
        <li>Children: {{$room->max_children}}</li>
        <li>Overview: {{$room->type}}</li>
        <li>Size: 30m²</li>
        <li>Bed Type: One bed</li>
        <li>Categories:Double,Single</li>
      </ul><a class="btn btn-primary button" href="{{route('order', ['roomNo'=>$room['room_number']])}}">Book now!</a>
   <p>{{$images}}</p>
    </div>  
</div>
@endsection