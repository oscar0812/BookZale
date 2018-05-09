<?php require_once("templates/header.php")?>
<div id="content">
  <div class="container">

    <div class="col-md-12">

      <ul class="breadcrumb">
        <li><a href="home">Home</a>
        </li>
        <li>My wishlist</li>
      </ul>

    </div>

    <div class="col-md-3">
      <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
      <div class="panel panel-default sidebar-menu">

        <div class="panel-heading">
          <h3 class="panel-title">Customer section</h3>
        </div>

        <div class="panel-body">

          <ul class="nav nav-pills nav-stacked">
            <li>
              <a href="customer-orders"><i class="fa fa-list"></i> My orders</a>
            </li>
            <li class="active">
              <a href="customer-wishlist"><i class="fa fa-heart"></i> My wishlist</a>
            </li>
            <li>
              <a href="customer-account"><i class="fa fa-user"></i> My account</a>
            </li>
            <li>
              <a href="logout"><i class="fa fa-sign-out"></i> Logout</a>
            </li>
          </ul>
        </div>

      </div>
      <!-- /.col-md-3 -->

      <!-- *** CUSTOMER MENU END *** -->
    </div>

    <div class="col-md-9" id="wishlist">

      <ul class="breadcrumb">
        <li><a href="home">Home</a>
        </li>
        <li>Books</li>
      </ul>

      <div class="box">
        <h1>My wishlist</h1>
        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="row products">
        <?php foreach (\WishlistQuery::create()->findByCurrentUser($user) as $wish) {
          $book = $wish->getCurrentBook()?>
          <div class="col-md-3 col-sm-4">
            <?php require("templates/product-with-btn.php")?>
          </div>
        <?php } ?>


      </div>
      <!-- /.products -->

    </div>
  </div>
  <!-- /.container -->
</div>
<!-- /#content -->
<?php require_once("templates/footer.php")?>
</body>
</html>
