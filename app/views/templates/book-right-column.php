<div class="col-md-3">
  <!-- *** MENUS AND FILTERS ***
_________________________________________________________ -->
  <div class="panel panel-default sidebar-menu">

    <div class="panel-heading">
      <h3 class="panel-title">Categories</h3>
    </div>

    <div class="panel-body">
      <ul class="nav nav-pills nav-stacked category-menu">
        <li>
          <a href="<?=modifyUrl(array('category'=>'1'), url("books"))?>">
            Students <span class="badge pull-right">2</span></a>
        </li>
        <li>
          <a href="<?=modifyUrl(array('category'=>'2'), url("books"))?>">
            Nonfiction <span class="badge pull-right">42</span></a>
          <ul>
            <li><a href="<?=modifyUrl(array('category'=>'6'), url("books"))?>">
              Persuasive Writing</a>
            </li>
            <li><a href="<?=modifyUrl(array('category'=>'7'), url("books"))?>">
              Information Writing</a>
            </li>
            <li><a href="<?=modifyUrl(array('category'=>'8'), url("books"))?>">
              Autobiography</a>
            </li>
            <li><a href="<?=modifyUrl(array('category'=>'9'), url("books"))?>">
              Biography</a>
            </li>
          </ul>
        </li>
        <li class="active">
          <a href="<?=modifyUrl(array('category'=>'3'), url("books"))?>">
            Fiction  <span class="badge pull-right">123</span></a>
          <ul>
            <li><a href="<?=modifyUrl(array('category'=>'10'), url("books"))?>">
              Historical Fiction</a>
            </li>
            <li><a href="<?=modifyUrl(array('category'=>'11'), url("books"))?>">
              Science Fiction</a>
            </li>
            <li><a href="<?=modifyUrl(array('category'=>'12'), url("books"))?>">
              Realistic Fiction</a>
            </li>
            <li><a href="<?=modifyUrl(array('category'=>'13'), url("books"))?>">
              Fantasy</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="<?=modifyUrl(array('category'=>'4'), url("books"))?>">
            Folklore  <span class="badge pull-right">11</span></a>
          <ul>
            <li><a href="<?=modifyUrl(array('category'=>'14'), url("books"))?>">
              Fable</a>
            </li>
            <li><a href="<?=modifyUrl(array('category'=>'15'), url("books"))?>">
              Myth</a>
            </li>
            <li><a href="<?=modifyUrl(array('category'=>'16'), url("books"))?>">
              Tall Tale</a>
            </li>
            <li><a href="<?=modifyUrl(array('category'=>'17'), url("books"))?>">
              Legend</a>
            </li>
            <li><a href="<?=modifyUrl(array('category'=>'18'), url("books"))?>">
              Fairytale</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="<?=modifyUrl(array('category'=>'5'), url("books"))?>">
            Drama <span class="badge pull-right">11</span></a>
          <ul>
            <li><a href="<?=modifyUrl(array('category'=>'19'), url("books"))?>">
              Comedy</a>
            </li>
            <li><a href="<?=modifyUrl(array('category'=>'20'), url("books"))?>">
              Tragedy</a>
            </li>
          </ul>
        </li>

      </ul>

    </div>
  </div>

  <div class="panel panel-default sidebar-menu">

    <div class="panel-heading">
      <h3 class="panel-title">Brands <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> Clear</a></h3>
    </div>

    <div class="panel-body">

      <form>
        <div class="form-group">
          <div class="checkbox">
            <label>
                                        <input type="checkbox">Armani (10)
                                    </label>
          </div>
          <div class="checkbox">
            <label>
                                        <input type="checkbox">Versace (12)
                                    </label>
          </div>
          <div class="checkbox">
            <label>
                                        <input type="checkbox">Carlo Bruni (15)
                                    </label>
          </div>
          <div class="checkbox">
            <label>
                                        <input type="checkbox">Jack Honey (14)
                                    </label>
          </div>
        </div>

        <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>

      </form>

    </div>
  </div>

  <div class="panel panel-default sidebar-menu">

    <div class="panel-heading">
      <h3 class="panel-title">Colours <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> Clear</a></h3>
    </div>

    <div class="panel-body">

      <form>
        <div class="form-group">
          <div class="checkbox">
            <label>
                                        <input type="checkbox"> <span class="colour white"></span> White (14)
                                    </label>
          </div>
          <div class="checkbox">
            <label>
                                        <input type="checkbox"> <span class="colour blue"></span> Blue (10)
                                    </label>
          </div>
          <div class="checkbox">
            <label>
                                        <input type="checkbox"> <span class="colour green"></span> Green (20)
                                    </label>
          </div>
          <div class="checkbox">
            <label>
                                        <input type="checkbox"> <span class="colour yellow"></span> Yellow (13)
                                    </label>
          </div>
          <div class="checkbox">
            <label>
                                        <input type="checkbox"> <span class="colour red"></span> Red (10)
                                    </label>
          </div>
        </div>

        <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>

      </form>

    </div>
  </div>

  <!-- *** MENUS AND FILTERS END *** -->

  <div class="banner">
    <a href="#">
                        <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                    </a>
  </div>
</div>
