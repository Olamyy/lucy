<!-- ============================================== TOP MENU : END ============================================== -->
<input type="hidden" id="couple_id" value="{$user_session[0].couple_id}">

<div class="main-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-2 logo-holder">
        <!-- ============================================================= LOGO ============================================================= -->
        <div class="logo"> <a href="{$BASE_URL}"> <img src="http://placehold.it/113x26" alt="logo"> </a> </div>
        <!-- /.logo -->
        <!-- ============================================================= LOGO : END ============================================================= --> </div>
      <!-- /.logo-holder -->

      <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
        <!-- /.contact-row -->
        <!-- ============================================================= SEARCH AREA ============================================================= -->
        <div class="search-area">
          <form>
            <div class="control-group">
              <ul class="categories-filter animate-dropdown">
                <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Filter Search <b class="caret"></b></a>
                  <ul class="dropdown-menu" role="menu" >
                    <li class="menu-header">Computer</li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Wedding</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Souvenirs</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Made In Nigeria</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Customized</a></li>
                  </ul>
                </li>
              </ul>
              <input class="search-field" placeholder="Search here..." />
              <a class="search-button" href="#" ></a> </div>
          </form>
        </div>
        <!-- /.search-area -->
        <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
      <!-- /.top-search-holder -->

      <div class="col-xs-12 col-sm-12 col-md-4 animate-dropdown top-cart-row">
        <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
        <div class="col-xs-12 col-sm-12 col-md-8">
          <div class="dropdown dropdown-cart">
            <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
              <div class="items-cart-inner">
                <div class="top-cart">  </div>
                <div class="total-price-basket"> <span class="lbl" id="price_count_span">0 items /</span> <span class="total-price"> <span class="sign">N</span><span class="value" id="cart_price_sum">0</span> </span> </div>
              </div>
            </a>
            <ul class="dropdown-menu">
              <li>
                <div class="cart-item product-summary">
                  <div class="row" id="cart_details">
                    <div class="col-xs-8" id="empty_cart_indicator">
                      <h5 class="name">Empty Cart</h5>
                    </div>
                  </div>
                </div>


              </li>
            </ul>
            <!-- /.dropdown-menu-->
          </div>
          <!-- /.dropdown-cart -->


        </div>

        <div class="col-xs-12 col-sm-12 col-md-4">
          <!-- /.header-top-inner -->
          <ul class="account">
            <li><a href="{$BASE_URL}registry/couple/action/settings">
                {if $user_session[0].is_logged_in|default: ''}Hi,
                {$user_session[0].groom_first_name|default: ''}
                {else}
            <li><a href="{$BASE_URL}auth/login">My Account</a></li>
            {/if}
          </ul>
        </div>
        <!-- /.top-cart-row -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  </div>

  <!-- /.main-header -->

  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown yamm-fw"> <a href="{$BASE_URL}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>
                <li class="dropdown"> <a href="{$BASE_URL}registry" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" onclick='location.href ="{$BASE_URL}registry/base"'>Registry</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              <li><a href="{$BASE_URL}registry/find">Find Registry</a></li>
                              <li><a href="{$BASE_URL}registry/create">Create Registry</a></li>
                              <li><a href="{$BASE_URL}registry/auth/login">Manage Registry</a></li>
                              <li><a href="{$BASE_URL}registry/whyus">Why Lucy Registry?</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>

                {if $pre_cart|default: ''}

                  {foreach from=$pre_cart item=data key=eKey}
                    <li> <a href="{$BASE_URL}category?cat_id={$data.category_id}">{$data.title}</a>
                    </li>
                  {/foreach}
                {/if}
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer -->
          </div>
          <!-- /.navbar-collapse -->

        </div>
        <!-- /.nav-bg-class -->
      </div>
      <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->

  </div>
  <!-- /.header-nav -->
  <!-- ============================================== NAVBAR : END ============================================== -->

  </header>