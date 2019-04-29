@extends('layouts.master')
@section('content')
@isset($room)
<p>{{$room->id}}</p>
<p>{{$room->type}}</p>
<p>{{$room->max_adults}}</p>
<p>{{$room->id}}</p>
<a href="{{route('order', ['roomNo'=>$room['room_number']])}}">Order</a>
@endisset
@endsection