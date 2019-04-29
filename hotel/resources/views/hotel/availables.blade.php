@extends('layouts.master')
@section('content')

        <div class="table-responsive text-nowrap">

  <table class="table">
    <thead class="black white-text">
      <tr>
        <th scope="col">Room no</th>
        <th scope="col">Type</th>
        <th scope="col">Cost</th>
        <th scope="col">See Inside Room</th>
      </tr>
    </thead>
    <tbody>
      @isset($availableRooms)
     @foreach($availableRooms as $aroom)
      <tr>
        <th scope="row">{{$aroom->room_number}}</th>
        <td>{{$aroom->type}}</td>
        <td>{{$aroom->cost}}</td>
        <td>
        <a href="{{route('show', ['id'=>$aroom->id])}}" class="btn btn-primary" role="button">Show</a>
        </td>
      </tr>
      @endforeach
        @endisset
    </tbody>
  </table>

</div>
{{-- {{print_r($availableRooms)}} --}}
@endsection