<?php /* Smarty version 3.1.24, created on 2017-02-21 17:01:38
         compiled from "/var/www/html/lucyreg/public/_template/front/navmenu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:97211302958ac6462108e50_09991207%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8660df2955e2255513e7d26b551d5f44fc3a94bc' => 
    array (
      0 => '/var/www/html/lucyreg/public/_template/front/navmenu.tpl',
      1 => 1487691052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97211302958ac6462108e50_09991207',
  'variables' => 
  array (
    'user_session' => 0,
    'BASE_URL' => 0,
    'pre_cart' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ac64626b4301_78260054',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ac64626b4301_78260054')) {
function content_58ac64626b4301_78260054 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '97211302958ac6462108e50_09991207';
?>
<!-- ============================================== TOP MENU : END ============================================== -->
<input type="hidden" id="couple_id" value="<?php echo $_smarty_tpl->tpl_vars['user_session']->value[0]['couple_id'];?>
">

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
            <!-- /.dropdown-menu-->
          </div>
          <!-- /.dropdown-cart -->


        </div>

        <div class="col-xs-12 col-sm-12 col-md-4">
          <!-- /.header-top-inner -->
          <ul class="account">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/action/settings">
                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['user_session']->value[0]['is_logged_in'])===null||$tmp==='' ? '' : $tmp)) {?>Hi,
                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_session']->value[0]['groom_first_name'])===null||$tmp==='' ? '' : $tmp);?>

                <?php } else { ?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
auth/login">My Account</a></li>
            <?php }?>
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
                <li class="active dropdown yamm-fw"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>
                <li class="dropdown"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" onclick='location.href ="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/base"'>Registry</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/find">Find Registry</a></li>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/create">Create Registry</a></li>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/auth/login">Manage Registry</a></li>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/whyus">Why Lucy Registry?</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>

                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['pre_cart']->value)===null||$tmp==='' ? '' : $tmp)) {?>

                  <?php
$_from = $_smarty_tpl->tpl_vars['pre_cart']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['data']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$foreach_data_Sav = $_smarty_tpl->tpl_vars['data'];
?>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
category?cat_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a>
                    </li>
                  <?php
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
}
?>
                <?php }?>
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