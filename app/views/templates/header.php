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
    Book Zale
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
                    <img src="img/logo.png" alt="logo" class="logo-img hidden-xs">
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
          <!-- add class active to li for color -->

          <li>
            <a href="books" data-hover="dropdown" data-delay="">Books</a>
          </li>
        </ul>

      </div>
      <!--/.nav-collapse -->

      <div class="navbar-buttons">

        <div class="navbar-collapse collapse right" id="basket-overview">
          <a href="basket" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
  </div>
  <!-- /#navbar -->

  <!-- *** NAVBAR END *** -->
  <div id="all">
