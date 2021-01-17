<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Kandy Buy</title>
  </head>
  <body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-dark justify-content-between">
        <a class="navbar-brand" href="index.php">Kandy Buy <i class='fas fa-desktop'></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
          <ul class="navbar-nav mr-auto" id="search">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search products" aria-label="Search">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
            </form>
         </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Products</a>
                  </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sign in
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="login.php">Sign in</a>
                <a class="dropdown-item" href="signup.php">Sign up</a>
              </div>
            </li>
            <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
            </li>
              </div>
            </li>
          </ul>
        </div>
      </nav>

        <!--carousel-->
      <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
      
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/carousel1.jpg" class="img-fluid" alt="macbook">
            <div class="carousel-caption">
              <h3>Laptops</h3>
              <div>Many options and its cheap!</div>
              <p><a href="product.php">SHOP NOW!</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/carousel2.jpg" class="img-fluid" alt="iphone">
            <div class="carousel-caption">
              <h3>iPhones</h3>
              <div>Alot of great deals!</div>
              <p><a href="product.php">SHOP NOW!</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/carousel3.jpg" class="img-fluid" alt="playstation">
            <div class="carousel-caption">
              <h3>Video Games</h3>
              <div>Need a gift to your son?</div>
              <p><a href="product.php">SHOP NOW!</a></p>
            </div>
          </div>
        </div>
      
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      
      </div>
      <!--main page-->
      <div class="container" id="main" style="margin-top:40px">    
        <div class="row">
          <div class="col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">Beats Headphone $350</div>
              <div class="panel-body"><img src="image/headphone.jpg" class="img-fluid" alt="Image"></div>
              <div class="panel-footer">Best headphone in the market!</div>
            </div>
          </div>
          <div class="col-sm-4"> 
            <div class="panel panel-primary">
              <div class="panel-heading">Xbox Series X $500</div>
              <div class="panel-body"><img src="image/xbox.jpg" class="img-fluid" alt="Image"></div>
              <div class="panel-footer">New Gen Xbox Buy Now!</div>
            </div>
          </div>
          <div class="col-sm-4"> 
            <div class="panel panel-primary">
              <div class="panel-heading">Galaxy S20 $1000</div>
              <div class="panel-body"><img src="image/galaxys20.jpg" class="img-fluid" alt="Image"></div>
              <div class="panel-footer">On Sales 10%</div>
            </div>
          </div>
        </div>
      </div><br>
      
      <div class="container">    
        <div class="row">
          <div class="col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">MacBook Pro $1500</div>
              <div class="panel-body"><img src="image/macbook.jpg" class="img-fluid" alt="Image"></div>
              <div class="panel-footer">Best Laptop in the market!</div>
            </div>
          </div>
          <div class="col-sm-4"> 
            <div class="panel panel-primary">
              <div class="panel-heading">PlayStation 5 $500</div>
              <div class="panel-body"><img src="image/ps5.jpg" class="img-fluid" alt="Image"></div>
              <div class="panel-footer">New Gen Console available now!</div>
            </div>
          </div>
          <div class="col-sm-4"> 
            <div class="panel panel-primary">
              <div class="panel-heading">4K HD TV $300</div>
              <div class="panel-body"><img src="image/tv.jpg" class="img-fluid" alt="Image"></div>
              <div class="panel-footer">HD TV with 4k resolution</div>
            </div>
          </div>
        </div>
      </div><br><br>

      
<div class="jumbotron">
  <div class="container-fluid text-center">
    <h1>Online Electronic Ecommerce Store</h1>      
    <p>One of the best place to buy your electronics</p>
    <p>Many options and affortable price</p>
    <a href="product.php"><p>SHOP NOW!</p></a>
  </div>
</div>

<!--new arrival-->
<div class="container-fluid" id="new-arrival">
  <h2>New Arrivals</h2>
  <hr class="solid">
  <div class="site-slider-two px-md-4">
    <div class="row slider-two text-center">
      <div class="col-md-2 product pt-md-4 pt-4">
      <div class="product-top">
        <img src="image/macbook.jpg" class="img-fluid" alt="Product 1">
        <div class="overlay">
          <a href="product.php"><button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button></a>
          <button type="button" class="btn btn-secondary" title="Cart"><i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <div class="product-bottom text-center">
        <h5>Macbook Pro</h5>
        <h6>$1500</h6>
        </div>
      </div>
      <div class="col-md-2 product pt-md-4 pt-4">
      <div class="product-top">
        <img src="image/galaxys20.jpg" class="img-fluid" alt="Product 1">
        <div class="overlay">
          <a href="product.php"><button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button></a>
          <button type="button" class="btn btn-secondary" title="Cart"><i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <div class="product-bottom text-center">
          <h5>Galaxy S21</h5>
          <h6>$1500</h6>
        </div>
      </div>
      <div class="col-md-2 product pt-md-4 pt-4">
      <div class="product-top">
        <img src="image/iphone12.jpg" class="img-fluid" alt="Product 1">
        <div class="overlay">
          <a href="product.php"><button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button></a>
          <button type="button" class="btn btn-secondary" title="Cart"><i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <div class="product-bottom text-center">
          <h5>iPhone 12</h5>
          <h6>$1500</h6>
        </div>
      </div>
      <div class="col-md-2 product pt-md-4 pt-4">
      <div class="product-top">
        <img src="image/ipad.jpg" class="img-fluid" alt="Product 1">
        <div class="overlay">
          <a href="product.php"><button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button></a>
          <button type="button" class="btn btn-secondary" title="Cart"><i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <div class="product-bottom text-center">
          <h5>iPad</h5>
          <h6>$1500</h6>
        </div>
      </div>
      <div class="col-md-2 product pt-md-4 pt-4">
      <div class="product-top">
        <img src="image/ps5.jpg" class="img-fluid" alt="Product 1">
        <div class="overlay">
          <a href="product.php"><button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button></a>
          <button type="button" class="btn btn-secondary" title="Cart"><i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <div class="product-bottom text-center">
          <h5>PS5</h5>
          <h6>$1500</h6>
        </div>    
      </div>
      <div class="col-md-2 product pt-md-4 pt-4">
      <div class="product-top">
        <img src="image/xbox.jpg" class="img-fluid" alt="Product 1">
        <div class="overlay">
          <a href="product.php"><button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button></a>
          <button type="button" class="btn btn-secondary" title="Cart"><i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <div class="product-bottom text-center">
          <h5>Xbox Series S</h5>
          <h6>$1500</h6>
        </div>
      </div>
    </div>
  </div>
</div>
      
      <footer class="container-fluid text-center">
        <p>Copyright @ 2021 Kandy</p>
        <div id="foot">
        <form class="form-inline"><div style="margin-right:5px">Get deals:</div>
          <input type="email" class="form-control" size="50" placeholder="Email Address" style="margin-right:5px">
          <button type="button" class="btn btn-danger">Sign Up</button>
        </form>
        </div>
      </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </body>
</html>