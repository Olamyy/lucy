<?php /* Smarty version 3.1.24, created on 2017-01-16 19:46:35
         compiled from "/var/www/html/lucy/public/_template/front/navmenu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1471185419587d150b0e9ce7_78417218%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e676c75439b7749b3ccebaf66c43d3fcafaf786' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/navmenu.tpl',
      1 => 1484592392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1471185419587d150b0e9ce7_78417218',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'PROMO' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_587d150b19d217_13089432',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587d150b19d217_13089432')) {
function content_587d150b19d217_13089432 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1471185419587d150b0e9ce7_78417218';
?>
 <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/Account">My Account</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Wishlist</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/Auth">Login</a></li>
                    </ul>
                </div>
                <!-- /.cnt-account -->
                </ul>
                <!-- /.list-unstyled -->
            </div>
            <!-- /.cnt-cart -->
            <div class="offer-text"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['PROMO']->value)===null||$tmp==='' ? 'Promo' : $tmp);?>
</div>
            <div class="clearfix"></div>
        </div>
        <!-- /.header-top-inner -->
    </div>
    <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/front-theme/assets/images/logo.png" alt="logo"> </a> </div>
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

                <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                    <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="top-cart">  </div>

                                <div class="total-price-basket"> <span class="lbl">2 items /</span> <span class="total-price"> <span class="sign">N</span><span class="value">600.00</span> </span> </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="cart-item product-summary">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="image"> <a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/front-theme/assets/images/cart.jpg" alt=""></a> </div>
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
                                <li class="active dropdown yamm-fw"> <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>
                                <li class="dropdown"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/Wedding" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Wedding</a>
                                    <ul class="dropdown-menu pages">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-xs-12 col-menu">
                                                        <ul class="links">
                                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/Registry/find">Find A Registry</a></li>
                                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/Registry/create">Create A Registry</a></li>
                                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/Registry/manage">Manage Registries</a></li>
                                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/Registry/help">Walk Through</a></li>
                                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/Registry/whyus">Why Lucy Registry?</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown yamm mega-menu"> <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Clothing & Jewellery </a>
                                    <ul class="dropdown-menu container">
                                        <li>
                                            <div class="yamm-content ">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                        <h2 class="title">Women</h2>
                                                        <ul class="links">
                                                            <li><a href="#">Handbags</a></li>
                                                            <li><a href="#">Jwellery</a></li>
                                                            <li><a href="#">Swimwear </a></li>
                                                            <li><a href="#">Tops</a></li>
                                                            <li><a href="#">Flats</a></li>
                                                            <li><a href="#">Shoes</a></li>
                                                            <li><a href="#">Winter Wear</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col -->

                                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                        <h2 class="title">Boys</h2>
                                                        <ul class="links">
                                                            <li><a href="#">Toys & Games</a></li>
                                                            <li><a href="#">Jeans</a></li>
                                                            <li><a href="#">Shirts</a></li>
                                                            <li><a href="#">Shoes</a></li>
                                                            <li><a href="#">School Bags</a></li>
                                                            <li><a href="#">Lunch Box</a></li>
                                                            <li><a href="#">Footwear</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col -->

                                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                        <h2 class="title">Girls</h2>
                                                        <ul class="links">
                                                            <li><a href="#">Sandals </a></li>
                                                            <li><a href="#">Shorts</a></li>
                                                            <li><a href="#">Dresses</a></li>
                                                            <li><a href="#">Jwellery</a></li>
                                                            <li><a href="#">Bags</a></li>
                                                            <li><a href="#">Night Dress</a></li>
                                                            <li><a href="#">Swim Wear</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/front-theme/assets/images/banners/wedding1.jpg" alt=""> </div>
                                                    <!-- /.yamm-content -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown mega-menu">
                                <li class="dropdown hidden-sm"> <a href="category.html">Health & Beauty <span class="menu-label new-menu hidden-xs">new</span> </a> </li>
                                <li><a href="category.html"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Electronics <span class="menu-label hot-menu hidden-xs">hot</span> </a>
                                    <ul class="dropdown-menu container">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                        <h2 class="title">Laptops</h2>
                                                        <ul class="links">
                                                            <li><a href="#">Gaming</a></li>
                                                            <li><a href="#">Laptop Skins</a></li>
                                                            <li><a href="#">Apple</a></li>
                                                            <li><a href="#">Dell</a></li>
                                                            <li><a href="#">Lenovo</a></li>
                                                            <li><a href="#">Microsoft</a></li>
                                                            <li><a href="#">Asus</a></li>
                                                            <li><a href="#">Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Cooling Pads</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col -->

                                                    <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                        <h2 class="title">Desktops</h2>
                                                        <ul class="links">
                                                            <li><a href="#">Routers & Modems</a></li>
                                                            <li><a href="#">CPUs, Processors</a></li>
                                                            <li><a href="#">PC Gaming Store</a></li>
                                                            <li><a href="#">Graphics Cards</a></li>
                                                            <li><a href="#">Components</a></li>
                                                            <li><a href="#">Webcam</a></li>
                                                            <li><a href="#">Memory (RAM)</a></li>
                                                            <li><a href="#">Motherboards</a></li>
                                                            <li><a href="#">Keyboards</a></li>
                                                            <li><a href="#">Headphones</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col -->

                                                    <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                        <h2 class="title">Cameras</h2>
                                                        <ul class="links">
                                                            <li><a href="#">Accessories</a></li>
                                                            <li><a href="#">Binoculars</a></li>
                                                            <li><a href="#">Telescopes</a></li>
                                                            <li><a href="#">Camcorders</a></li>
                                                            <li><a href="#">Digital</a></li>
                                                            <li><a href="#">Film Cameras</a></li>
                                                            <li><a href="#">Flashes</a></li>
                                                            <li><a href="#">Lenses</a></li>
                                                            <li><a href="#">Surveillance</a></li>
                                                            <li><a href="#">Tripods</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                        <h2 class="title">Mobile Phones</h2>
                                                        <ul class="links">
                                                            <li><a href="#">Apple</a></li>
                                                            <li><a href="#">Samsung</a></li>
                                                            <li><a href="#">Lenovo</a></li>
                                                            <li><a href="#">Motorola</a></li>
                                                            <li><a href="#">LeEco</a></li>
                                                            <li><a href="#">Asus</a></li>
                                                            <li><a href="#">Acer</a></li>
                                                            <li><a href="#">Accessories</a></li>
                                                            <li><a href="#">Headphones</a></li>
                                                            <li><a href="#">Memory Cards</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-menu custom-banner"> <a href="#"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/front-theme/assets/images/banners/banner-side.png"></a> </div>
                                                </div>
                                                <!-- /.row -->
                                            </div></li>
                                        <!-- /.yamm-content --> </li>
                                    </ul>
                                </li>
                                <li class="dropdown"> <a href="contact.html">Kids</a> </li>
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Made In Nigeria</a>
                                    <ul class="dropdown-menu pages">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-xs-12 col-menu">
                                                        <ul class="links">
                                                            <li><a href="home.html">Home</a></li>
                                                            <li><a href="category.html">Category</a></li>
                                                            <li><a href="detail.html">Detail</a></li>
                                                            <li><a href="shopping-cart.html">Shopping Cart Summary</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="blog.html">Blog</a></li>
                                                            <li><a href="blog-details.html">Blog Detail</a></li>
                                                            <li><a href="contact.html">Contact</a></li>
                                                            <li><a href="sign-in.html">Sign In</a></li>
                                                            <li><a href="my-wishlist.html">Wishlist</a></li>
                                                            <li><a href="terms-conditions.html">Terms and Condition</a></li>
                                                            <li><a href="track-orders.html">Track Orders</a></li>
                                                            <li><a href="product-comparison.html">Product-Comparison</a></li>
                                                            <li><a href="faq.html">FAQ</a></li>
                                                            <li><a href="404.html">404</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown  navbar-right special-menu"> <a href="#">Todays offer</a> </li>
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

</header><?php }
}
?>