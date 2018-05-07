<?php require_once("templates/header.php"); ?>
<div id="content">
  <div class="container">

    <div class="col-md-12">

      <ul class="breadcrumb">
        <li><a href="home">Home</a>
        </li>
        <li>New account / Sign in</li>
      </ul>

    </div>

    <div class="col-md-6">
      <div class="box">
        <h1>New account</h1>

        <p class="lead">Not our registered customer yet?</p>
        <p>With registration with us new world of Bookz, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
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
