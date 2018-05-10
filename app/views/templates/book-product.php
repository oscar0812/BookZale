<div class="product <?php if(isset($height))echo " same-height "?>">
  <div class="flip-container">
    <div class="flipper">
      <div class="front">
        <a href="detail?book_id=<?=$book->getId()?>">
                                        <img src="<?=$book->getImageUrl()?>" alt="" class="img-responsive clip-image">
                                    </a>
      </div>
      <div class="back">
        <a href="detail?book_id=<?=$book->getId()?>">
                                        <img src="<?=$book->getImageUrl()?>" alt="" class="img-responsive clip-image">
                                    </a>
      </div>
    </div>
  </div>
  <a href="detail?book_id=<?=$book->getId()?>" class="invisible">
                            <img src="<?=$book->getImageUrl()?>" alt="" class="img-responsive clip-image">
                        </a>
  <div class="text">
    <h3><a href="detail?book_id=<?=$book->getId()?>"><?=$book->getName()?></a></h3>
    <p class="price">$
      <?=$book->getPrice()?>
    </p>
    <?php if(isset($btn)) { ?>
    <p class="buttons">
      <a href="detail?book_id=<?=$book->getId()?>" class="btn btn-default">View detail</a>
      <a href="basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
    </p>
    <?php } ?>
  </div>
  <!-- /.text -->
  <?php if($book->isCheap()) { ?>
  <div class="ribbon sale">
    <div class="theribbon">SALE</div>
    <div class="ribbon-background"></div>
  </div>
<?php } if($book->isNew()) { ?>
  <div class="ribbon new">
    <div class="theribbon">NEW</div>
    <div class="ribbon-background"></div>
  </div>
<?php } ?>
</div>
<!-- /.product -->
