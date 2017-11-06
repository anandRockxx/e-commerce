<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Shopper - online E-commerce website</title>
    <!-- Css Files  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  </head>
  <body>
    <!--================
    Navigation
    ====================  -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <a class=" navbar-brand" href="index.php"><strong>SHOPPER</strong></a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar" aria-controls="#navbar" aria-label="toggle-navigation">
      <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="drop-link" data-toggle="dropdown">
              electronics
            </a>
            <div class="dropdown-menu" id="dropdown">
              <a class="dropdown-item" href="#">mobiles</a>
              <a class="dropdown-item" href="#">home entertainments</a>
              <a class="dropdown-item" href="#">laptops</a>
              <a class="dropdown-item" href="#">televisions</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="drop-link" data-toggle="dropdown">
              appliances
            </a>
            <div class="dropdown-menu" id="dropdown">
              <a class="dropdown-item" href="#">televisions</a>
              <a class="dropdown-item" href="#">fridge</a>
              <a class="dropdown-item" href="#">washing machines</a>
              <a class="dropdown-item" href="#">ac</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="drop-link" data-toggle="dropdown">
              men
            </a>
            <div class="dropdown-menu" id="dropdown">
              <a class="dropdown-item" href="#">t-shirts</a>
              <a class="dropdown-item" href="#">shirts</a>
              <a class="dropdown-item" href="#">pants</a>
              <a class="dropdown-item" href="#">shoes</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="drop-link" data-toggle="dropdown">
              women
            </a>
            <div class="dropdown-menu" id="dropdown">
              <a class="dropdown-item" href="#">t-shirts</a>
              <a class="dropdown-item" href="#">jeans</a>
              <a class="dropdown-item" href="#">tops</a>
              <a class="dropdown-item" href="#">shoes</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#">books</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#">offers</a>
          </li>
        </ul>
        <form class="form-inline" id="search">
          <div class="input-group">
            <input class="form-control" type="text" name="search" placeholder="search...">
            <button class="btn btn-light input-group-addon" type="button" name="button"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </form>
        <form class="form-inline" id="users">
          <ul>
            <li>
              <i class="fa fa-user-circle" aria-hidden="true"></i>
            </li>
            <li>
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </li>
          </ul>
        </form>
      </div>
    </nav>

    <!--================
    Carousel
    ====================  -->

    <div class="carousel slide" id="carousel" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/slider/slide_1.jpg" alt="img1">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slider/slide_2.jpg" alt="img2">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slider/slide_3.jpg" alt="img3">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slider/slide_4.jpg" alt="img4">
          <div class="carousel-caption">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="sr-only">previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon"></span>
          <span class="sr-only">next</span>
        </a>
      </div>
    </div>
    

    <!--================
    Latest Deals
    ====================  -->

    <div class="deals" id="deals">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 timmer-sec">
            <h2>deals of the day</h2>
            <div class="time">
              <span class="hr">00</span>
              <span class="min">00</span>
              <span class="sec">00</span>
            </div>
            <button class="btn btn-primary" type="button" name="button">view more</button>
          </div>
          <div class="col-lg-9">

            <div class="deal-container">

              <div class="deal-item">
                <figure>
                  <img src="images/deals/deal-1.jpeg" alt="image-1">
                  <figcaption>
                  <h3 class="item-title">walls stickers</h3>
                  <p class="item-price">starting at <span>999</span></p>
                  <p class="category">home</p>
                </figcaption>
                </figure>
              </div>

               <div class="deal-item">
                <figure>
                  <img src="images/deals/deal-2.jpg" alt="image-2">
                  <figcaption>
                  <h3 class="item-title">walls stickers</h3>
                  <p class="item-price">starting at <span>999</span></p>
                  <p class="category">home</p>
                </figcaption>
                </figure>
              </div>

               <div class="deal-item">
                <figure>
                  <img src="images/deals/deal-3.jpg" alt="image-3">
                  <figcaption>
                  <h3 class="item-title">walls stickers</h3>
                  <p class="item-price">starting at <span>999</span></p>
                  <p class="category">home</p>
                </figcaption>
                </figure>
              </div>

               <div class="deal-item">
                <figure>
                  <img src="images/deals/deal-4.jpg" alt="image-4">
                  <figcaption>
                  <h3 class="item-title">walls stickers</h3>
                  <p class="item-price">starting at ₹<span>999</span></p>
                  <p class="category">home</p>
                </figcaption>
                </figure>
              </div>

               <div class="deal-item">
                <figure>
                  <img src="images/deals/deal-5.jpeg" alt="image-5">
                  <figcaption>
                  <h3 class="item-title">walls stickers</h3>
                  <p class="item-price">starting at <span>999</span></p>
                  <p class="category">home</p>
                </figcaption>
                </figure>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

    <!--================
    Top-Offers
    ====================  -->

    <div class="offers" id="offers">

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="img-container">
              <img src="images/top_offers/offer-1.jpg" alt="offer-1">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="img-container">
              <img src="images/top_offers/offer-2.jpg" alt="offer-2">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="img-container">
              <img src="images/top_offers/offer-3.jpg" alt="offer-3">
            </div>
          </div>
        </div>
      </div>
    </div>


 <!--================
    Featured Brands
    ====================  -->

  <div class="brands">
    <div class="brand-title">
      <h2 class="text-left">featured brands</h2>
    </div>
    <div class="container">
      <div class="row">
        
        <div class="prev-btn">
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
      </div>
      <div class="next-btn">
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
      </div>

        <div class="col-lg-12">
        <div class="brand-container">
          
          <div class="item">
            <div class="img-container">
            <img src="images/brands/brand-1.jpg" alt="brand-1">  
            </div>
          </div>

           <div class="item">
            <div class="img-container">
            <img src="images/brands/brand-2.jpg" alt="brand-2">  
            </div>
          </div>

           <div class="item">
            <div class="img-container">
            <img src="images/brands/brand-3.jpg" alt="brand-3">  
            </div>
          </div>

           <div class="item">
            <div class="img-container">
            <img src="images/brands/brand-4.jpg" alt="brand-4">  
            </div>
          </div>

           

        </div>
        </div>
      </div>
    </div>
  </div>



































  <!-- Javascripts Files -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>