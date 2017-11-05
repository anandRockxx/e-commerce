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


<!-- latest deals -->
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
      <div class="deal-item">
        <figure>
          <img src="images/deals/deal-1.jpeg" alt="deal-1">
          <figcaption>
            <div class="item-details">
              <h2 class="item-title">wall stickers</h2>
              <p class="item-price">starting at <span class="price">999</span></p>
              <p class="category">super deal price</p>
            </div>
          </figcaption>
        </figure>
        <figure>
          <img src="images/deals/deal-2.jpg" alt="deal-2">
          <figcaption>
            <div class="item-details">
              <h2 class="item-title">jeans</h2>
              <p class="item-price">starting at <span class="price">499</span></p>
              <p class="category">for men</p>
            </div>
          </figcaption>
        </figure>
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
