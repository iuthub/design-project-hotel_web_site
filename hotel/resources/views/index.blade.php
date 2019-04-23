<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  {{-- Google font --}}
  <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" 
  rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/slideWiz.css" rel="stylesheet" type="text/css">
  {{-- date picker --}}
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
 
  <div class="slideWiz" style="width: 100%; height: 100vh;"></div>

  {{-- Date picker --}}
  <div class="container">
    <div class="checking mt-5 z-depth-4">
      <form action="#" class="d-flex flex-wrap">
        <div class="form-group flex-fill p-3">
          <label for="text" class="text-uppercase">arrival:</label>
          <input type="text" id="datepicker" class="form-control" required/>
        </div>
        <div class="form-group flex-fill p-3">
            <label for="text" class="text-uppercase">departure:</label>
            <input type="text" id="datepicker2" class="form-control" required/>
        </div>
        <div class="form-group flex-fill p-3">
            <label for="text" class="text-uppercase">adults</label>
            <select class="form-control" id="sel1" name="sellist1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
        </div>
        <div class="form-group flex-fill  p-3">
            <label for="text" class="text-uppercase">children</label>
            <select class="form-control" id="sel1" name="sellist1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary flex-fill p-3 m-5">Submit</button>
      </form>
    </div>
  </div>
  
  {{-- Welcome --}}
  <div class="welcome m-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h5>Welcome to the</h5>
            <h1 class="display-3">Best Uzbekapolis Hotel</h1>
            <p>The Woods hotel, located at the very heart of Indianapolis is a welcoming retreat both for people traveling across the country and for businessmen, visiting our Rustbelt state for some commercial affairs. Here, we always make sure that you will have any of your needs satisfied, be it a comfortable hotel room with a strong WiFi signal and a diligent room service, a dining and lounge zone or any additional amenities a traveller might want...</p>
          </div>
          <div class="col-lg-6 overlay zoom p-5">
            <img src="images/welcome.jpg" alt="" class="img-fluid">
          </div>
        </div>
    </div>
  </div>

  {{-- Rooms --}}
  <div class="rooms">
    <div class="container text-center">
      <div class="rooms-heading">
        <h5>PLENTY OF ROOM...</h5>
        <h1 class="display-3">Rooms & Suites</h1>
        <p>Modern Hotel has 35 elegantly furnished and air conditioned classic rooms, which will be a perfect pick both for business and leisure travelers...</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 view overlay zoom p-5">
          <img src="images/suite.jpg" alt="">
          <div class="suite pt-5">
            <h1>Suite</h1>
            <h2 class="display-4">&#36;249<span>&#47;per night</span></h2>
            <ul>
              <li>Only 5 rooms are available</li>
              <li>Breakfast included</li>
              <li>Price does not include VAT & services fee</li>
            </ul>
            <button type="submit" class="btn btn-primary flex-fill pr-5 pl-5">Book Now!</button>
          </div>
        </div>
        <div class="col-lg-4 view overlay zoom p-5">
          <img src="images/double.jpg" alt="">
          <div class="suite pt-5">
              <h1>Double Room</h1>
              <h2 class="display-4">&#36;114<span>&#47;per night</span></h2>
              <ul>
                <li>Perfect for traveling couples</li>
                <li>Breakfast not included</li>
                <li>Concierge services</li>
              </ul>
              <button type="submit" class="btn btn-primary flex-fill pr-5 pl-5">Book Now!</button>
          </div>
        </div>
        <div class="col-lg-4 view overlay zoom p-5 ">
          <img src="images/family.jpg" alt="">
          <div class="suite pt-5">
              <h1>Family Room</h1>
              <h2 class="display-4">&#36;195<span>&#47;per night</span></h2>
              <ul>
                <li>Two double beds</li>
                <li>Babysitting facilities</li>
                <li>1 free bed available on request</li>
              </ul>
              <button type="submit" class="btn btn-primary flex-fill pr-5 pl-5">Book Now!</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Dining Bar --}}
  <div class="dining-bar pt-1">
      <div class="container text-center">
        <div class="rooms-heading">
          <h1 class="display-3">Dining & Bar</h1>
          <p>Taste our trademark cocktails & enjoy a truly unique culinary experience... As the sun sets and the sky turns purple, we celebrate the violet hour and the end of the day before welcoming the start of the night.</p>
        </div>

        <!-- Nav pills -->
        <div class="tile" id="tile-1">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-justified" role="tablist">
            <div class="slider"></div>
             <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mains</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Desserts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Drinks</a>
              </li>
          </ul>
        
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col-lg-6 p-5">
                        <h1 class="display-5  ">Organic Yoghurt Panna Cotta&nbsp;<span>&#36;8</span></h1>
                        <p>Blackcurrant & limoncello compote, crunchy spiced crumble & lemon zest</p>
                        <h1 class="display-5">Poleta Cake&nbsp;<span>&#36;8</span></h1>
                        <p>Served with whipped crème fraîche, fresh orange & pomegranate
                        <h1 class="display-5">GVin Sano Tiramisu&nbsp;<span>&#36;8</span></h1>
                        <p>The classic Italian dessert with vin santo, chocolate shavings & orange zest</p>
                    </div>
                    <div class="col-lg-6 overlay zoom p-5">
                        <img src="images/dessert.jpeg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col-lg-6 p-5">
                        <h1 class="display-5">Aperol Spritz&nbsp;<span>&#36;10</span></h1>
                        <p>A refreshing mix of Aperol, soda & Jamie’s Prosecco</p>
                        <h1 class="display-5">Elderflower Spritz&nbsp;<span>&#36;7</span></h1>
                        <p>St Germain elderflower liqueur, Jamie’s Prosecco & soda</p>
                        <h1 class="display-5">Bellini&nbsp;<span>&#36;8</span></h1>
                        <p>White peach purée & Jamie’s Prosecco</p>
                    </div>
                    <div class="col-lg-6 overlay zoom p-5">
                        <img src="images/drink.jpeg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
          </div>
        </div>  
        <button type="submit" class="btn btn-primary pr-5 pl-5">see all menu</button>
      </div>
  </div>
  
  {{-- Location --}}
  <div class="location pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="location-box">
            <h1 class="display-4">Hotel location &amp; map</h1>
            <p class=""><i class="fas fa-map-marker-alt"></i>&nbsp;1 A Navoi St, Ташкент 100017, Узбекистан</p>
            <p class=""><i class="fas fa-map-marked-alt"></i>&nbsp;878G+JW Ташкент, Узбекистан</p> 
            <p class=""><a href="#"><i class="fas fa-globe-americas"></i>&nbsp;Uzbekapolis.com</a></p> 
            <p class=""><i class="fa fa-phone" aria-hidden="true"></i>
              &nbsp;+99897&ndash;772&ndash;64&ndash;62</p>
          </div>   
        </div>
        <div class="col-lg-6">
            <form action="">
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="usr" name="username" placeholder="Name" required>
                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group col-md-12">
                    <textarea class="form-control" rows="5" id="comment" placeholder="Comment" required></textarea>
                </div>
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary float-right">Send</button>
                </div>  
              </div>  
            </form>
        </div>
      </div>
    </div>
  </div>

  {{--Google Map --}}
  <div class="map">
    <div class="container-fluid">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1259.934216738232!2d69.27666450982048!3d41.31657562615783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b302631a383%3A0x324fb78013c57369!2sHyatt+Regency+Tashkent!5e0!3m2!1sru!2s!4v1555930770197!5m2!1sru!2s" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>

  <a href="#" class="scrollToTop"><i class='fas fa-arrow-circle-up'></i></a>
  
  <!-- SCRIPTS -->
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  {{-- Jquery slider Plugin--}}
  <script src="js/framework/slideWiz.js"></script>
  <script src="js/slideShow.js"></script>
  {{-- my script --}}
  <script src="js/script.js"></script>
</body>

</html>

