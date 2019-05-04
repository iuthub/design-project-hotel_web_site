@extends('layouts.master')
 @section('assets')
      <!-- My styles -->
  <link href="css/index.css" rel="stylesheet">
  <link href="css/slideWiz.css" rel="stylesheet" type="text/css">
  {{-- date picker --}}
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>

    @endsection
@section('content')
     <div class="row">
            @if ($message = Session::get('success'))

                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">×</button>

                    <strong>{{ $message }}</strong>

                </div>

            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="container">

<div class="row d-flex justify-content-left">

  <!--Grid column-->
  <div class="col-md-6">

<img class="rounded mx-auto d-bloc" style="max-width: 250px;max-height: 250px" src="/storage/avatars/{{ $user->avatar }}" />

  </div>
  <!--Grid column-->
  <div class="col-md-6"><form action="/profile" method="post" enctype="multipart/form-data">
                <h2>{{$user->name}}</h2>
                <h3>Address:{{$user->address}}</h3>
                <h3>Passport id:{{$user->pass_id}}</h3>
                @csrf
                <div class="form-group">
                    <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
            <hr>
            @isset($orders)
            <h1>Ordered rooms</h1>
            <div class="table-responsive text-nowrap">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Room number</th>
        <th scope="col">Arrival</th>
        <th scope="col">Departure</th>
        <th scope="col">Cancel</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
      <tr>
        <th scope="row">{{$order->room_number}}</th>
        <td>{{$order->arrival}}</td>
        <td>{{$order->departure}}</td>
        <td><a href="{{route('order.cancel', ['orderNo'=>$order->id])}}">Cancel</a>
      </tr>
      @endforeach   
    </tbody>
  </table>
     @endisset
</div>

       
  </div>  
</div>
            

</div>

@endsection