<?php require_once("templates/header.php"); ?>
<div id="content">
  <div class="container">

    <div class="col-md-12">

      <ul class="breadcrumb">
        <li><a href="#">Home</a>
        </li>
        <li>New account / Sign in</li>
      </ul>

    </div>

    <div class="col-md-6">
      <div class="box">
        <h1>New account</h1>

        <p class="lead">Not our registered customer yet?</p>
        <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
        <p class="text-muted">If you have any questions, please feel free to <a href="contact">contact us</a>, our customer service center is working for you 24/7.</p>

        <hr>

        <form action="customer-orders" method="post" id="register-form">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
          </div>
        </form>
      </div>
    </div>

    <div class="col-md-6">
      <div class="box">
        <h1>Login</h1>

        <p class="lead">Already our customer?</p>
        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae
          est. Mauris placerat eleifend leo.</p>

        <hr>

        <form action="customer-orders" method="post" id="login-form">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <label id="login-error" class="text-danger notvisible">Incorrect Email or password</label>
          <div class="text-center">
            <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
          </div>
        </form>
      </div>
    </div>


  </div>
  <!-- /.container -->
</div>
<!-- /#content -->
<!-- *** FOOTER ***
 _________________________________________________________ -->
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <h4>Pages</h4>

        <ul>
          <li><a href="text">About us</a>
          </li>
          <li><a href="text">Terms and conditions</a>
          </li>
          <li><a href="faq">FAQ</a>
          </li>
          <li><a href="contact">Contact us</a>
          </li>
        </ul>

        <hr>

        <h4>User section</h4>

        <ul>
          <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
          </li>
          <li><a href="register">Regiter</a>
          </li>
        </ul>

        <hr class="hidden-md hidden-lg hidden-sm">

      </div>
      <!-- /.col-md-3 -->

      <div class="col-md-3 col-sm-6">

        <h4>Top categories</h4>

        <h5>Men</h5>

        <ul>
          <li><a href="books">T-shirts</a>
          </li>
          <li><a href="books">Shirts</a>
          </li>
          <li><a href="books">Accessories</a>
          </li>
        </ul>

        <h5>Ladies</h5>
        <ul>
          <li><a href="books">T-shirts</a>
          </li>
          <li><a href="books">Skirts</a>
          </li>
          <li><a href="books">Pants</a>
          </li>
          <li><a href="books">Accessories</a>
          </li>
        </ul>

        <hr class="hidden-md hidden-lg">

      </div>
      <!-- /.col-md-3 -->

      <div class="col-md-3 col-sm-6">

        <h4>Where to find us</h4>

        <p><strong>Obaju Ltd.</strong>
          <br>13/25 New Avenue
          <br>New Heaven
          <br>45Y 73J
          <br>England
          <br>
          <strong>Great Britain</strong>
        </p>

        <a href="contact">Go to contact page</a>

        <hr class="hidden-md hidden-lg">

      </div>
      <!-- /.col-md-3 -->



      <div class="col-md-3 col-sm-6">

        <h4>Get the news</h4>

        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

        <form>
          <div class="input-group">

            <input type="text" class="form-control">

            <span class="input-group-btn">

			    <button class="btn btn-default" type="button">Subscribe!</button>

			</span>

          </div>
          <!-- /input-group -->
        </form>

        <hr>

        <h4>Stay in touch</h4>

        <p class="social">
          <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
          <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
          <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
          <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
        </p>


      </div>
      <!-- /.col-md-3 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</div>
<!-- /#footer -->

<!-- *** FOOTER END *** -->




<!-- *** COPYRIGHT ***
 _________________________________________________________ -->
<div id="copyright">
  <div class="container">
    <div class="col-md-6">
      <p class="pull-left">© 2018 BookStoreInc.</p>

    </div>
    <!-- no copyright since donation has been given -->
  </div>
</div>
<!-- *** COPYRIGHT END *** -->



</div>
<!-- /#all -->

<!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/bootstrap-hover-dropdown.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/front.js"></script>
<script src="js/jquery.validate.min.js"></script>


<script>
$(function() {
  login_form = $("#login-form");
  signup_form = $("#register-form");

  // form validation

  login_form.validate({
    // Specify validation rules
    rules: {
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
      }
    },
    // Specify validation error messages
    messages: {
      password: {
        required: "Please provide a password",
      },
      email: "Please enter a valid email address"
    },
    errorPlacement: function(error, element) {
      // make the error read, and append it to the parent
      error.addClass('text-danger').appendTo(element.parent());
    },
    submitHandler: function(form) {
      // once its successful
      email = login_form.find('input[name="email"]').val();
      password = login_form.find('input[name="password"]').val();
      logIn(email, password);
    }
  });


  signup_form.validate({
    // Specify validation rules
    rules: {

      name: {
        required: true
      },
      email: {
        required: true,

        // Specify that email should be validated
        // by the built-in "email" rule
        email: true,

        remote: {
          url: "email",
          type: "POST",
          data: {
            email: function() {
              return $(signup_form).find('input[name="email"]').val();
            }
          }
        }
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      name: {
        required: "Please provide a name",
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: {
        required: "Please enter a valid email address",
        remote: jQuery.validator.format("Email is already in use.")
      }
    },
    errorPlacement: function(error, element) {
      // make the error read, and append it to the parent
      error.addClass('text-danger').appendTo(element.parent());
    },
    submitHandler: function(form) {
      // once its successful
      name = signup_form.find('input[name="name"]').val();
      email = signup_form.find('input[name="email"]').val();
      password = signup_form.find('input[name="password"]').val();

      registerUser(name, email, password);
    }
  });

  // ajax calls to login or register a new account

  function logIn(email, password) {
    $.ajax({
      type: "POST",
      data: {
        type: "login",
        email: email,
        password: password
      },
      url: window.location.href,
      success: function(data) {
        if (data['success']) {
          window.location = "customer-orders";
        } else {
          // show error
          $("#login-error").removeClass("notvisible");
        }
      }
    });
  }

  function registerUser(name, email, password) {
    $.ajax({
      type: "POST",
      data: {
        type: "register",
        name: name,
        email: email,
        password: password
      },
      url: window.location.href,
      success: function(data) {
        console.log(data);
      }
    });
  }

});

</script>

</body>

</html>
