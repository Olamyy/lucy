{if $user_session|default:''}
  {if $user_session[0].regType == "wedding"}
    <input type="hidden" id="couple_id" value="{$user_session[0].couple_id}">
  {/if}
  {else}
  <input type="hidden" id="user_id" value="{$user_session[0].user_id}">
{/if}

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
              <input class="search-field" placeholder="Search here..." />
              <a class="search-button" href="#" ></a> </div>
          </form>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 animate-dropdown top-cart-row">
        <div class="col-xs-12 col-sm-12 col-md-8">
          <div class="dropdown dropdown-cart">
            <a href="{$BASE_URL}registry/checkout/cart" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
              <div class="items-cart-inner">
                <div class="top-cart">  </div>
                <div class="total-price-basket"  id="checkoutbtn"> <span class="lbl" id="price_count_span">0 items /</span> <span class="total-price"> <span class="sign">N</span><span class="value" id="cart_price_sum">0</span> </span> </div>
              </div>
            </a>

          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
          <ul class="account">
            {if $user_session[0].is_logged_in|default: ''}
            <li><a href="{$BASE_URL}registry/couple/action/settings">Hi, {$user_session[0].groom_first_name|default: ''}
              </a></li>
            {else}
              <li><a href="{$BASE_URL}auth/login">My Account</a></li>
            {/if}
          </ul>
        </div>
      </div>
    </div>
  </div>
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
                              <li><a href="{$BASE_URL}auth/join">Create Registry</a></li>
                              <li><a href="{$BASE_URL}auth/login">Manage Registry</a></li>
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
                  <li class="dropdown"> <a href="{$BASE_URL}category?cat_id={$data.category_id}" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" onclick="location.href ='{$BASE_URL}category?cat_id={$data.category_id}'">{$data.title}</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              {foreach from=$data.pre_cat item=cat_cart key=eKey}
                                <li><a href="{$BASE_URL}registry/find">{$cat_cart}</a></li>
                              {/foreach}
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
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