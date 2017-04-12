<?php /* Smarty version 3.1.24, created on 2017-03-02 13:55:03
         compiled from "/var/www/html/lucy/public/_template/front/registry/couple/dashboard/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:170883933058b81627dfb697_14721314%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4c5bbe61253ce282b60d73a2f57351fdae6802d' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/registry/couple/dashboard/nav.tpl',
      1 => 1488459301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170883933058b81627dfb697_14721314',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'user_session' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58b81627e4c769_80863123',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b81627e4c769_80863123')) {
function content_58b81627e4c769_80863123 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '170883933058b81627dfb697_14721314';
?>
</div>
<div class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 logo-holder">
                <!-- ============================================================= LOGO ============================================================= -->
                <div class="logo"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"> <img src="http://placehold.it/113x26" alt="logo"> </a> </div>
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
                        <ul class="dropdown-menu" id="">
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
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <ul class="account">
                        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['user_session']->value[0]['is_logged_in'])===null||$tmp==='' ? '' : $tmp)) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/action/settings">Hi, <?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_session']->value[0]['groom_first_name'])===null||$tmp==='' ? '' : $tmp);?>

                                </a></li>
                        <?php } else { ?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
auth/login">My Account</a></li>
                        <?php }?>
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
                            <li class="active"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/dashboard" id="dashboard">Dashboard</a> </li>
                            <li class=""> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/action/manage" id="manage">Manage Registry</a> </li>
                            <li class=""> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/action/share" id="share">Share</a> </li>
                            <li class=""> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/action/track" id="track">Track</a> </li>
                            <li class="dropdown"> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">My Account</a>
                                <ul class="dropdown-menu pages">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-menu">
                                                    <ul class="links">
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/action/settings">Account Settings</a></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/action/help">Help</a></li>
                                                        <input type="hidden" id="base_url" value="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">
                                                        <input type="hidden" id="couple_id" value="<?php echo $_smarty_tpl->tpl_vars['user_session']->value[0]['couple_id'];?>
">
                                                        <input type="hidden" id="user_ip" value="<?php echo $_smarty_tpl->tpl_vars['user_session']->value[0]['ip'];?>
">
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/action/logout" id="logout_btn">Logout</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
</header><?php }
}
?>