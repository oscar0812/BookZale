<?php require_once("templates/header.php")?>
<div id="content">
  <div class="container">

    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><a href="home">Home</a>
        </li>
        <li>Text page</li>
      </ul>
    </div>

    <div class="col-md-3">
      <!-- *** PAGES MENU ***
 _________________________________________________________ -->
      <div class="panel panel-default sidebar-menu">

        <div class="panel-heading">
          <h3 class="panel-title">Pages</h3>
        </div>

        <div class="panel-body">
          <ul class="nav nav-pills nav-stacked">
            <li>
              <a href="text">Text page</a>
            </li>
            <li>
              <a href="contact">Contact page</a>
            </li>
            <li>
              <a href="faq">FAQ</a>
            </li>

          </ul>

        </div>
      </div>

      <!-- *** PAGES MENU END *** -->


      <div class="banner">
        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
      </div>
    </div>

    <div class="col-md-9">

      <div class="box" id="text-page">
        <h1>Text formatting - Header level 1</h1>

        <p class="lead">This page aim is to show you the most common HTML elements appearance on the website. For further reference please visit official <a href="http://getbootstrap.com/css/" class="external">Bootstrap website</a>.</p>

        <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em>          Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum
          orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

        <h2>Header Level 2</h2>

        <ol>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Aliquam tincidunt mauris eu risus.</li>
        </ol>

        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus
            turpis elit sit amet quam. Vivamus pretium ornare est.</p>
        </blockquote>

        <h3>Header Level 3</h3>

        <ul>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Aliquam tincidunt mauris eu risus.</li>
        </ul>

        <hr>

        <h2>Images</h2>

        <div class="row">
          <div class="col-md-4">
            <p class="text-center">
              <img src="img/detailsquare.jpg" class="img-circle img-responsive" alt="">
            </p>
            <p class="text-center">circle</p>
          </div>
          <div class="col-md-4">
            <p class="text-center">
              <img src="img/detailsquare.jpg" class="img-thumbnail  img-responsive" alt="">
            </p>
            <p class="text-center">thumbnail</p>
          </div>
          <div class="col-md-4">
            <p class="text-center">
              <img src="img/detailsquare.jpg" class="img-rounded img-responsive" alt="">
            </p>
            <p class="text-center">rounded</p>
          </div>
        </div>

      </div>


    </div>
    <!-- /.col-md-9 -->
  </div>
  <!-- /.container -->
</div>
<!-- /#content -->
<?php require_once("templates/footer.php")?>
</body>
</html>
