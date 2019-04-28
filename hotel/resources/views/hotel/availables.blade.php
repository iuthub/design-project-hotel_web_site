@extends('layouts.master')
@section('content')

        <div class="table-responsive text-nowrap">

  <table class="table">
    <thead class="black white-text">
      <tr>
        <th scope="col">Room no</th>
        <th scope="col">Type</th>
        <th scope="col">Cost</th>
        <th scope="col">Order links</th>
      </tr>
    </thead>
    <tbody>
      <tr>
       {{-- @isset($availableRooms) --}}
       @foreach($availableRooms as $aroom)
        <th scope="row">{{$aroom->room_number}}</th>
        <td>{{$aroom->type}}</td>
        <td>{{$aroom->cost}}</td>
        <td><a href="{{route('show', ['id'=>$aroom->id])}}">Show</a></td>
        @endforeach
{{--         @endisset --}}
      </tr>
    </tbody>
  </table>

</div>
{{-- {{print_r($availableRooms)}} --}}
@endsection