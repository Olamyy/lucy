
<!-- /.container -->
</div>
<!-- /.header-top -->
<!-- ============================================== TOP MENU : END ============================================== -->
<div class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
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
                                <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown">Categories <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu" >
                                        <li class="menu-header">Computer</li>
                                        <li role="presentation"> <input type="hidden" value="clothing_category" <a role="menuitem" tabindex="-1">- Clothing</a></li>
                                        <li role="presentation"><input type="hidden" value="electronics_category" <a role="menuitem" tabindex="-1">- Electronics</a></li>
                                        <li role="presentation"><input type="hidden" value="electronics_category" <a role="menuitem" tabindex="-1" >- Shoes</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" <a role="menuitem" tabindex="-1">- Watches</a></li>
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

            <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
                <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                        <div class="items-cart-inner">
                            <div class="top-cart">  </div>

                            <div class="total-price-basket"> <span class="lbl">2 items /</span> <span class="total-price"> <span class="sign">$</span><span class="value">600.00</span> </span> </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="cart-item product-summary">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="image"> <a href="detail.html"><img src="assets/images/cart.jpg" alt=""></a> </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3>
                                        <div class="price">$600.00</div>
                                    </div>
                                    <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a> </div>
                                </div>
                            </div>
                            <!-- /.cart-item -->
                            <div class="clearfix"></div>
                            <hr>
                            <div class="clearfix cart-total">
                                <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>$600.00</span> </div>
                                <div class="clearfix"></div>
                                <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                            <!-- /.cart-total-->

                        </li>
                    </ul>
                    <!-- /.dropdown-menu-->
                </div>
                <!-- /.dropdown-cart -->

                <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
            <!-- /.top-cart-row -->
        </div>
        <!-- /.row -->

    </div>
            <!-- /.top-cart-row -->
        </div>
        <!-- /.row -->

    <!-- /.container -->
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
                            <li class="active"> <a href="{$BASE_URL}registry/couple/dashboard" id="dashboard">Dashboard</a> </li>
                            <li class=""> <a href="{$BASE_URL}registry/couple/action/manage" id="manage">Manage Registry</a> </li>
                            <li class=""> <a href="{$BASE_URL}registry/couple/action/share" id="share">Share</a> </li>
                            <li class=""> <a href="{$BASE_URL}registry/couple/action/track" id="track">Track</a> </li>
                            <li class="dropdown"> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">My Account</a>
                                <ul class="dropdown-menu pages">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-menu">
                                                    <ul class="links">
                                                        <li><a href="{$BASE_URL}registry/couple/action/settings">Account Settings</a></li>
                                                        <li><a href="{$BASE_URL}registry/couple/action/help">Help</a></li>
                                                        <input type="hidden" id="base_url" value="{$BASE_URL}">
                                                        <input type="hidden" id="couple_id" value="{$user_session[0].couple_id}">
                                                        <input type="hidden" id="user_ip" value="{$user_session[0].ip}">
                                                        <li><a href="{$BASE_URL}registry/couple/action/logout" id="logout_btn">Logout</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
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

</div>
<!-- /.main-header -->

<!-- ============================================== NAVBAR ============================================== -->
<!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->

</header>