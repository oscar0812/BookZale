<?php require_once("templates/header.php")?>
<div id="content">
  <div class="container">

    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><a href="home">Home</a>
        </li>
        <li><a href="books">Books</a>
        </li>
        <li><a href="books?category=<?=$category->getId()?>"><?=$category->getName()?></a>
        </li>
        <li><?=$current_book->getName()?></li>
      </ul>

    </div>
    <?php require_once("templates/book-right-column.php") ?>

    <div class="col-md-9">

      <div class="row" id="productMain">
        <div class="col-sm-6">
          <div id="mainImage">
            <img src="<?=$current_book->getImageUrl()?>" alt="" class="img-responsive">
          </div>

          <div class="ribbon sale">
            <div class="theribbon">SALE</div>
            <div class="ribbon-background"></div>
          </div>
          <!-- /.ribbon -->

          <div class="ribbon new">
            <div class="theribbon">NEW</div>
            <div class="ribbon-background"></div>
          </div>
          <!-- /.ribbon -->

        </div>
        <div class="col-sm-6">
          <div class="box">
            <h1 class="text-center"><?=$current_book->getName()?></h1>
            <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material & care and sizing</a>
            </p>
            <p class="price">$<?=$current_book->getPrice()?></p>

            <p class="text-center buttons">
              <a href="basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
              <a href="basket" class="btn btn-default"><i class="fa fa-heart"></i> Add to wishlist</a>
            </p>


          </div>

          <div class="row" id="thumbs">
            <div class="col-xs-4">
              <a href="<?=$current_book->getImageUrl()?>" class="thumb">
                                        <img src="<?=$current_book->getImageUrl()?>" alt="" class="img-responsive">
                                    </a>
            </div>
            <div class="col-xs-4">
              <a href="<?=$current_book->getImageUrl()?>" class="thumb">
                                        <img src="<?=$current_book->getImageUrl()?>" alt="" class="img-responsive">
                                    </a>
            </div>
            <div class="col-xs-4">
              <a href="<?=$current_book->getImageUrl()?>" class="thumb">
                                        <img src="<?=$current_book->getImageUrl()?>" alt="" class="img-responsive">
                                    </a>
            </div>
          </div>
        </div>

      </div>


      <div class="box" id="details">
        <p>
          <h4>Book Description</h4>
          <p><?=$current_book->getDescription()?></p>
          <h4>Posted By</h4>
          <p><?=$current_book->getUser()->getName()?></p>
          <h4>Something</h4>
          <ul>
            <li>1</li>
            <li>2</li>
          </ul>

          <blockquote>
            <p><em><?=$current_book->getCategory()->getDescription()?></em>
            </p>
          </blockquote>

          <hr>
          <div class="social">
            <h4>Show it to your friends</h4>
            <p>
              <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
              <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
              <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
            </p>
          </div>
      </div>

      <div class="row same-height-row">
        <div class="col-md-3 col-sm-6">
          <div class="box same-height">
            <h3>You may also like these products</h3>
          </div>
        </div>

        <?php foreach($books as $book) {
          $height = true?>
        <div class="col-md-3 col-sm-6">
          <?php require("templates/product-with-btn.php")?>
          <!-- /.product -->
        </div>
        <?php } ?>

      </div>

      <div class="row same-height-row">
        <div class="col-md-3 col-sm-6">
          <div class="box same-height">
            <h3>Products viewed recently</h3>
          </div>
        </div>
        <!-- for later
        <div class="col-md-3 col-sm-6">
          <div class="product same-height">
            <div class="flip-container">
              <div class="flipper">
                <div class="front">
                  <a href="detail">
                                                <img src="img/product2.jpg" alt="" class="img-responsive">
                                            </a>
                </div>
                <div class="back">
                  <a href="detail">
                                                <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                            </a>
                </div>
              </div>
            </div>
            <a href="detail" class="invisible">
                                    <img src="img/product2.jpg" alt="" class="img-responsive">
                                </a>
            <div class="text">
              <h3>Fur coat</h3>
              <p class="price">$143</p>
            </div>
          </div>
        </div>
      -->



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
