<?php /* Smarty version 3.1.24, created on 2017-04-07 10:10:48
         compiled from "/var/www/html/lucy/public/_template/admin/navmenu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16054416458e757985362a9_32462622%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06a25c92213522c9b6f8ad7e07dc06fbf9cb34a9' => 
    array (
      0 => '/var/www/html/lucy/public/_template/admin/navmenu.tpl',
      1 => 1487677328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16054416458e757985362a9_32462622',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58e75798560791_36129642',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e75798560791_36129642')) {
function content_58e75798560791_36129642 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16054416458e757985362a9_32462622';
?>
<div class="bg-dark" id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid">
                <a class="navbar-brand text-xs-center" href="index.html">
                    <h4 class="text-white">LUCY ADMIN</h4>
                </a>
                <div class="menu">
                        <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                        </span>
                </div>

                <!-- Toggle Button -->
                <div class="text-xs-right xs_menu">
                    <button class="navbar-toggler hidden-xs-up" type="button" data-toggle="collapse"
                            data-target="#nav-content">
                        ☰
                    </button>
                </div>
                <!-- Nav Content -->
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="topnav dropdown-menu-right float-xs-right">
                </div>
                <div class="collapse navbar-toggleable-sm col-xl-6 col-lg-6 hidden-md-down float-xl-right  top_menu"
                     id="nav-content">
                    <ul class="nav navbar-nav top_menubar">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/Product/">
                                <i class="fa fa-product-hunt"></i> <span class="quick_text">Add Product</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="gallery.html">
                                <i class="fa fa-mail-reply"></i> <span class="quick_text">Send Mail</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- /.container-fluid --> </nav>
        <!-- /.navbar -->
        <!-- /.head --> </div>
    <!-- /#top -->
    <div class="wrapper">
        <div id="left">
            <!-- #menu -->
            <ul id="menu" class="bg-blue dker">
                <li class="active">
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                        <span class="link-title">&nbsp;Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-sitemap"></i>
                        <span class="link-title">&nbsp; Products</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/Product/view">
                                <i class="fa fa-angle-right"></i> &nbsp;View
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/Product/add">
                                <i class="fa fa-angle-right"></i> &nbsp;Add
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-angle-right"></i> &nbsp;Edit
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-sitemap"></i>
                        <span class="link-title">&nbsp; Product Categories</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/Category/view">
                                <i class="fa fa-angle-right"></i> &nbsp;View Categories
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/Category/add">
                                <i class="fa fa-angle-right"></i> &nbsp;Add Category
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;">
                        <i class="fa fa-sitemap"></i>
                        <span class="link-title">&nbsp; Sales</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/Product/view">
                                <i class="fa fa-angle-right"></i> &nbsp;Orders
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/Product/add">
                                <i class="fa fa-angle-right"></i> &nbsp;Returns
                            </a>
                        </li>
                            <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Vouchers
                            </a>
                            <ul class="sub-menu sub-submenu">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right"></i> &nbsp;Create
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right"></i> &nbsp;View
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right"></i> &nbsp;Remove
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="index.html">
                        <i class="fa fa-users"></i>
                        <span class="link-title">&nbsp;Customers</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:;">
                        <i class="fa fa-archive"></i> &nbsp;Marketing
                        <span class="fa arrow"></span>

                    </a>
                    <ul class="sub-menu sub-submenu">
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Campaign
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Coupon
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Mail
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-history"></i> &nbsp;Reports
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu sub-submenu">
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Sales
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Products
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Customers
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Marketers
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/logout">
                        <i class="fa fa-globe"></i>
                        <span class="link-title" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/logout">&nbsp;Logout</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">
                        <i class="fa fa-globe"></i>
                        <span class="link-title" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">&nbsp;Go to Store</span>
                    </a>
                </li>
            </ul>
            <!-- /#menu -->
        </div>

<?php }
}
?>