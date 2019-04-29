@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">{{Auth::user()->name}}</div>
            <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item">
                    My Orders
                  </li>
                  <li class="list-group-item">
                    My Services
                  </li>
                  <li class="list-group-item">
                    Book a Room
                  </li>
                  <li class="list-group-item">
                    <a href="/rooms">Available rooms</a>
                  </li>

                  <li class="list-group-item bg-danger" >
                    <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" style="color:white">
                        {{ __('Logout') }}
                    </a>
                  </li>
                </ul>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
          </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @yield('user_content')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
