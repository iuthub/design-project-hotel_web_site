@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

<h2 class="h1-responsive font-weight-bold text-center my-5">Recent posts</h2>
<p class="text-center dark-grey-text w-responsive mx-auto mb-5">I`m gonna introduce some news on the current stock It`s getting very dark in this room</p>
<div class="row">
	<div class="col-lg-8 col-xl-8">
		<div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
			<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" alt="Sad">
			<a>
				<div class="mask rgba-white-slight"></div>
			</a>
		</div>
		<!--Post title-->
		<h3 class="font-weight-bold mb-3"><strong>Title of the news</strong></h3>
		<p class="dark-grey-text">dsadsdk lfdsf lskfkfa kslnsdfn klnfasn kfndknfk asndlnkfnskldn fnklfnskf nks ndfknskdnf ksndkfnkldnkfnsdk lnfsd</p>
		<!--Post data-->
		<p>by<a class="font-weight-bold">Jessica Lark</a>,19/04/2018</p>
		<!--Read more button-->
		<a class="btn btn-primary btn-md">Read more</a>
	</div>
	<div class="col-lg-4 col-xl-4 border-left">
		<div class="search border-bottom">
			<form class="form-inline mr-auto">
				<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
				<button class="btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
			</form><br>
		</div>
		<div class="about">
			<h2>About</h2>
			<img src="https://livedemo00.template-help.com/wt_62268_v1/images/sidebar-1-418x312.jpg" class="img -fluid rounded mx-auto d-block">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a class="btn btn-primary btn-danger">Read more</a>
		</div>
		<div class="categories border-top">
			<h2>Categories</h2>
			<a href="#">Special offers</a><br>
			<a href="#">Guest Review</a><br>
			<a href="#">City Guide</a><br>
			<a href="#">State guide</a><br>
			<a href="#">News</a><br>
		</div>
		<div class="recent_posts border-top">
			<h2>Recent posts</h2>
			<p>by Copenhagen</p>    <h5><a href="#">A definitive guide to the best dining and drinking Venues in the city</a></h5>
			<!---->
			<p>by Copenhagen</p>    <h5><a href="#">A definitive guide to the best dining and drinking Venues in the city</a></h2>
			<!---->
			<p>by Copenhagen</p>    <h5><a href="#">A definitive guide to the best dining and drinking Venues in the city</a></h2>
		</div>
		<div class="recent_comments border-top">
			<h2>Recent comments</h2>
			<p>by Copenhagen</p>    <h5><a href="#">A definitive guide to the best dining and drinking Venues in the city</a></h5>
			<!---->
			<p>by Copenhagen</p>    <h5><a href="#">A definitive guide to the best dining and drinking Venues in the city</a></h2>
			<!---->
			<p>by Copenhagen</p>    <h5><a href="#">A definitive guide to the best dining and drinking Venues in the city</a></h2>
		</div>
		<div class="tags border-top">
			<h2>Tags</h2>
			<h6><span class="badge badge-primary">New</span></h6>
		</div>
		<div class="calendar border-top" id="mainer"></div>
		<div class="newsletter border-top">
			<h2>Sign up for a Newsletter</h2>
			<form class="form-inline mr-auto">
				<input class="form-control mr-sm-2" type="text" placeholder="Enter your e-mail" aria-label="Enter your e-mail">
				<button class="btn-outline-success btn-rounded btn-sm my-0" type="submit">GET!</button>
			</form>
		</div>
	</div>

@endsection