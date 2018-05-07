<?php require_once("templates/header.php")?>
<div id="content">
  <div class="container">

    <div class="col-md-12">

      <ul class="breadcrumb">
        <li><a href="home">Home</a>
        </li>
        <li><a href="customer-orders">My orders</a>
        </li>
        <li>Order # 1735</li>
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
            <li class="active">
              <a href="customer-orders"><i class="fa fa-list"></i> My orders</a>
            </li>
            <li>
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

    <div class="col-md-9" id="customer-order">
      <div class="box">
        <h1>Order #1735</h1>

        <p class="lead">Order #1735 was placed on <strong>22/06/2013</strong> and is currently <strong>Being prepared</strong>.</p>
        <p class="text-muted">If you have any questions, please feel free to <a href="contact">contact us</a>, our customer service center is working for you 24/7.</p>

        <hr>

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th colspan="2">Product</th>
                <th>Quantity</th>
                <th>Unit price</th>
                <th>Discount</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <a href="#">
                                                <img src="img/detailsquare.jpg" alt="White Blouse Armani">
                                            </a>
                </td>
                <td><a href="#">Some book</a>
                </td>
                <td>2</td>
                <td>$123.00</td>
                <td>$0.00</td>
                <td>$246.00</td>
              </tr>
              <tr>
                <td>
                  <a href="#">
                                                <img src="img/basketsquare.jpg" alt="Black Blouse Armani">
                                            </a>
                </td>
                <td><a href="#">Other book</a>
                </td>
                <td>1</td>
                <td>$200.00</td>
                <td>$0.00</td>
                <td>$200.00</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="5" class="text-right">Order subtotal</th>
                <th>$446.00</th>
              </tr>
              <tr>
                <th colspan="5" class="text-right">Shipping and handling</th>
                <th>$10.00</th>
              </tr>
              <tr>
                <th colspan="5" class="text-right">Tax</th>
                <th>$0.00</th>
              </tr>
              <tr>
                <th colspan="5" class="text-right">Total</th>
                <th>$456.00</th>
              </tr>
            </tfoot>
          </table>

        </div>
        <!-- /.table-responsive -->

        <div class="row addresses">
          <div class="col-md-6">
            <h2>Invoice address</h2>
            <p>John Brown
              <br>13/25 New Avenue
              <br>New Heaven
              <br>45Y 73J
              <br>England
              <br>Great Britain</p>
          </div>
          <div class="col-md-6">
            <h2>Shipping address</h2>
            <p>John Brown
              <br>13/25 New Avenue
              <br>New Heaven
              <br>45Y 73J
              <br>England
              <br>Great Britain</p>
          </div>
        </div>

      </div>
    </div>

  </div>
  <!-- /.container -->
</div>
<!-- /#content -->
<?php require_once("templates/footer.php")?>
</body>
</html>
