<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('partials.head')

<title>Hotel-@yield('title')</title>

</head>
<body>
<header>
	@include('partials.header')
</header>
<main>

    @yield('content')

</main>
<footer>
@include('partials.footer')
</footer>

 <!-- SCRIPTS -->
  <!-- JQuery -->

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{URL::to('js/popper.min.js')}}"></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{URL::to('js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{URL::to('js/mdb.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{URL::to('js/uploadcharacteristics.js')}}"></script>
 {{-- Jquery slider Plugin--}}
  <script src="js/framework/slideWiz.js"></script>
  <script src="js/slideShow.js"></script>
  {{-- my script --}}
  <script src="js/script.js"></script>
</body>
</html>
