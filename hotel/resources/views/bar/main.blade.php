@extends('layouts.master')
@section('content')
  <div class="container-fluid">
    <section>
      <div class="image" data-type="background" data-speed="2"></div>
      <div class="stuff" data-type="content">
        <h1 class="display-2">Dining & Bar</h1>
        <p>While you'll be staying at our hotel, you will be able to enjoy our exquisite food menu available both at our lobby restaurant and a summer terrace, just as well as order menu items upstairs, as a part of our room service. We offer both meat & fish dishes and vegetarian menu items...</p>
        <p>On par with our two restaurants, we also have a lobby bar, which features an extensive Beverages, Spirits and Wines Menu of its own... Try not to get tangled within dozens of miscellaneous cocktails, alcoholic drinks and different wines that we have there!</p>
      </div>
    </section>
  </div>

  {{-- Main --}}
  <section class="main slideanim">
    <div class="container pt-5">
      <h1>Main Courses Menu</h1>
      <div class="row">
          <div class="col-lg-6 p-5">
              <h1 class="display-5">Plov&nbsp;<span>&#36;10</span></h1>
              <p>Plov is cooked with rice, fresh mutton or beef, yellow or red carrot, onions and vegetable oil. It is prepared in a deep cast-iron pot (kazan), which is uniformly warmed and a dish is not burnt.</p>
              <h1 class="display-5">Chicken Parmagiana&nbsp;<span>&#36;8</span></h1>
              <p>Chicken Surf & Turf $31 Char grilled garlic chicken breast fillet topped with a garlic seafood sauce & served with garden salad & steak fries or with steamed vegetables and potato.</p>
              <h1 class="display-5">Gluten Free Surf & Turf&nbsp;<span>&#36;8</span></h1>
              <p>Char grilled Scotch fillet 300gm topped with a garlic seafood sauce & served with garden salad & steak fries or with steamed veggies roast chat potato.</p>
          </div>
          <div class="col-lg-6 overlay zoom p-5">
              <img src="images/plov.jpg" alt="" class="img-fluid">
          </div>
      </div>
    </div>
  </section>

  {{-- Desserts --}}
  <section class="desserts slideanim">
    <div class="container">
      <h1 class="text-center">Desserts Menu</h1>
      <div class="row">
        <div class="col-lg-4 view overlay zoom p-5">
          <img src="images/dessert.jpeg" alt="">
          <div class="yoghurt pt-5">
            <h1 class="display-5">Organic Yoghurt Panna Cotta&nbsp;<span>&#36;8</span></h1>
            <p>Blackcurrant & limoncello compote, crunchy spiced crumble & lemon zest</p>
          </div>
        </div>
        <div class="col-lg-4 view overlay zoom p-5">
          <img src="images/bar/polette.jpeg" alt="">
          <div class="poleta pt-5">
            <h1 class="display-5">Poleta Cake&nbsp;<span>&#36;8</span></h1>
            <p>Served with whipped crème fraîche, fresh orange & pomegranate</p>
          </div>
        </div>
        <div class="col-lg-4 view overlay zoom p-5">
          <img src="images/bar/vin-sano.jpg" alt="">
          <div class="vin-sano pt-5">
            <h1 class="display-5">Vin Sano Tiramisu&nbsp;<span>&#36;8</span></h1>
            <p>The classic Italian dessert with vin santo, chocolate shavings & orange zest</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Drinks --}}
  <section class="drinks slideanim">
    <div class="container">
      <h1 class="text-center">Drinks Menu</h1>
      <div class="row">
          <div class="col-lg-6 overlay zoom p-5">
              <img src="images/drink.jpeg" alt="" class="img-fluid">
          </div>
          <div class="col-lg-6 p-5">
              <h1 class="display-5">Aperol Spritz&nbsp;<span>&#36;10</span></h1>
              <p>A refreshing mix of Aperol, soda & Jamie’s Prosecco</p>
              <h1 class="display-5">Elderflower Spritz&nbsp;<span>&#36;7</span></h1>
              <p>St Germain elderflower liqueur, Jamie’s Prosecco & soda</p>
              <h1 class="display-5">Bellini&nbsp;<span>&#36;8</span></h1>
              <p>White peach purée & Jamie’s Prosecco</p>
          </div>
      </div>
    </div>
  </section>

  {{-- Download --}}
  <section class="download slideanim">
    <div class="container text-center">
      <h1 class="p-5">Download Full Menu</h1>
      <button type="submit" class="btn btn-primary pr-5 pl-5 mb-5"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Download now</button>
    </div>
  </section>
  <a href="#" class="scrollToTop slideanim"><i class='fas fa-arrow-circle-up'></i></a>
@endsection