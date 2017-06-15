<header class="header-style-1">
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo"> <a href="{$BASE_URL}"> <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/logo.png" height="30" alt="logo"> </a> </div>
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
                <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
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
                    </div>
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
                                <li class="dropdown"> <a href="{$BASE_URL}registry" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" onclick='location.href ="{$BASE_URL}registry/base"'>Gift Registry</a>
                                    <ul class="dropdown-menu pages">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-xs-12 col-menu">
                                                        <ul class="links">
                                                            <li><a href="{$BASE_URL}registry/find">Find Registry</a></li>
                                                            <li><a href="{$BASE_URL}auth/join">Create Registry</a></li>
                                                            <li><a href="{$BASE_URL}auth/login">Manage Registry</a></li>
                                                            <li><a href="{$BASE_URL}registry/base">Why Lucy Registry?</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                {if $pre_cart|default: ''}
                                {foreach from=$pre_cart item=data key=eKey}
                                    {*{if $is_sub == 1}*}
                                    <li class="dropdown"> <a href="{$BASE_URL}category?cat_id={$data.category_id}" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" onclick="location.href ='{$BASE_URL}category?cat_id={$data.category_id}'">{$data.title}</a>
                                        <ul class="dropdown-menu pages">
                                            <li>
                                                <div class="yamm-content">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-menu">
                                                            <ul class="links">
                                                                {foreach from=$data.pre_cat item=cat_cart key=eKey}
                                                                    <li><a href="{$BASE_URL}subcart?p_id={$cat_cart}&c_id={$data.category_id}">{$cat_cart}</a></li>
                                                                {/foreach}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    {*{/if}*}
                                {/foreach}
                            </ul>
                        </div>
                        </li>
                        </ul>
                        </li>

                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
