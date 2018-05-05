<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="robots" content="all,follow">
  <meta name="googlebot" content="index,follow,snippet,archive">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Obaju e-commerce template">
  <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
  <meta name="keywords" content="">

  <title>
    Obaju : e-commerce template
  </title>

  <meta name="keywords" content="">

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

  <!-- styles -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.css" rel="stylesheet">

  <!-- theme stylesheet -->
  <link href="css/style.pink.css" rel="stylesheet" id="theme-stylesheet">

  <!-- your stylesheet with modifications -->
  <link href="css/custom.css" rel="stylesheet">

  <script src="js/respond.min.js"></script>

  <link rel="shortcut icon" href="favicon.png">



</head>

<body>
  <!-- *** TOPBAR ***
 _________________________________________________________ -->
  <div id="top">
    <div class="container">
      <div class="col-md-6 offer" data-animate="fadeInDown">
        <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a> <a href="#">Get flat 35% off on orders over $50!</a>
      </div>
      <div class="col-md-6" data-animate="fadeInDown">
        <ul class="menu">
          <?php if($user == null) { ?>
          <li><a href="register">Account</a>
          <?php } else { ?>
          <li><a href="customer-orders"><?=$user->getName()?></a>  
          <?php } ?>
          </li>
          <li><a href="contact">Contact</a>
          </li>
          <li><a href="#">Recently viewed</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- *** TOP BAR END *** -->

  <!-- *** NAVBAR ***
 _________________________________________________________ -->

  <div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
      <div class="navbar-header">

        <a class="navbar-brand home" href="home" data-animate-hover="bounce">
                    <img src="img/logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
        <div class="navbar-buttons">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
          <a class="btn btn-default navbar-toggle" href="basket">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
        </div>
      </div>
      <!--/.navbar-header -->

      <div class="navbar-collapse collapse" id="navigation">

        <ul class="nav navbar-nav navbar-left">
          <li>
            <a href="home" data-hover="dropdown" data-delay="">Home</a>
          </li>
          <!-- add class active for blue -->

          <li>
            <a href="category" data-hover="dropdown" data-delay="">Books</a>
          </li>

          <li class="dropdown yamm-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Template <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <div class="yamm-content">
                  <div class="row">
                    <div class="col-sm-3">
                      <h5>Shop</h5>
                      <ul>
                        <li><a href="home">Homepage</a>
                        </li>
                        <li><a href="category">Category - sidebar left</a>
                        </li>
                        <li><a href="category-right">Category - sidebar right</a>
                        </li>
                        <li><a href="category-full">Category - full width</a>
                        </li>
                        <li><a href="detail">Product detail</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-3">
                      <h5>User</h5>
                      <ul>
                        <li><a href="register">Register / login</a>
                        </li>
                        <li><a href="customer-orders">Orders history</a>
                        </li>
                        <li><a href="customer-order">Order history detail</a>
                        </li>
                        <li><a href="customer-wishlist">Wishlist</a>
                        </li>
                        <li><a href="customer-account">Customer account / change password</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-3">
                      <h5>Order process</h5>
                      <ul>
                        <li><a href="basket">Shopping cart</a>
                        </li>
                        <li><a href="checkout1">Checkout - step 1</a>
                        </li>
                        <li><a href="checkout2">Checkout - step 2</a>
                        </li>
                        <li><a href="checkout3">Checkout - step 3</a>
                        </li>
                        <li><a href="checkout4">Checkout - step 4</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-3">
                      <h5>Pages and blog</h5>
                      <ul>
                        <li><a href="blog">Blog listing</a>
                        </li>
                        <li><a href="post">Blog Post</a>
                        </li>
                        <li><a href="faq">FAQ</a>
                        </li>
                        <li><a href="text">Text page</a>
                        </li>
                        <li><a href="text-right">Text page - right sidebar</a>
                        </li>
                        <li><a href="404">404 page</a>
                        </li>
                        <li><a href="contact">Contact</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /.yamm-content -->
              </li>
            </ul>
          </li>
        </ul>

      </div>
      <!--/.nav-collapse -->

      <div class="navbar-buttons">

        <div class="navbar-collapse collapse right" id="basket-overview">
          <a href="basket" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
        </div>
        <!--/.nav-collapse -->

        <div class="navbar-collapse collapse right" id="search-not-mobile">
          <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
            <span class="sr-only">Toggle search</span>
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>

      <div class="collapse clearfix" id="search">

        <form class="navbar-form" role="search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
          </div>
        </form>

      </div>
      <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
  </div>
  <!-- /#navbar -->

  <!-- *** NAVBAR END *** -->
  <div id="all">
