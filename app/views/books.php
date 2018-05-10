<?php require_once("templates/header.php")?>
<div id="content">
  <div class="container">

    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><a href="home">Home</a>
        </li>
        <li>
          <?=$category->getName()?>
        </li>
      </ul>
    </div>
    <?php require_once("templates/book-right-column.php") ?>

    <div class="col-md-9">
      <div class="box">
        <h1><?=$category->getName()?></h1>
        <p>
          <?=$category->getDescription()?>
        </p>
      </div>

      <div class="box info-bar">
        <div class="row">
          <div class="col-sm-12 col-md-4 products-showing">
            Showing <strong>12</strong> of <strong>25</strong> products
          </div>

          <div class="col-sm-12 col-md-8  products-number-sort">
            <div class="row">
              <form class="form-inline">
                <div class="col-md-6 col-sm-6">
                  <div class="products-number">
                    <strong>Show</strong> <a href="#" class="btn btn-default btn-sm btn-primary">12</a> <a href="#" class="btn btn-default btn-sm">24</a> <a href="#" class="btn btn-default btn-sm">All</a> products
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="products-sort-by">
                    <strong>Sort by</strong>
                    <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row products">
        <?php foreach ($books as $book) {?>
          <div class="col-md-4 col-sm-6">
          <?php require("templates/book-product.php")?>
          </div>
        <?php } ?>

      </div>
      <!-- /.products -->

      <div class="pages">

        <p class="loadMore">
          <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
        </p>

        <ul class="pagination">
          <li><a href="#">&laquo;</a>
          </li>
          <li class="active"><a href="#">1</a>
          </li>
          <li><a href="#">2</a>
          </li>
          <li><a href="#">3</a>
          </li>
          <li><a href="#">4</a>
          </li>
          <li><a href="#">5</a>
          </li>
          <li><a href="#">&raquo;</a>
          </li>
        </ul>
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
