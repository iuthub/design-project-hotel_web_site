@extends('layouts.master')
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
            </form></div>  
</div>
            

</div>

@endsection