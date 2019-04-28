@extends('layouts.master')
@section('content')
        @isset($availableRooms)
        @foreach($availableRooms as $aroom)
        <p>{{$aroom->id}}</p>
        @endforeach
        @endisset
@endsection