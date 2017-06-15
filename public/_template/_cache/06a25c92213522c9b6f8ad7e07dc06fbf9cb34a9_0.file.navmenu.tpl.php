<?php /* Smarty version 3.1.24, created on 2017-06-03 07:58:54
         compiled from "/var/www/html/lucy/public/_template/admin/navmenu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:635603059325e2e4c0636_67641921%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06a25c92213522c9b6f8ad7e07dc06fbf9cb34a9' => 
    array (
      0 => '/var/www/html/lucy/public/_template/admin/navmenu.tpl',
      1 => 1496473131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '635603059325e2e4c0636_67641921',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59325e2e532431_91033529',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59325e2e532431_91033529')) {
function content_59325e2e532431_91033529 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '635603059325e2e4c0636_67641921';
?>
<div class="bg-dark" id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid">
                <a class="navbar-brand text-xs-center" href="">
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
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/dashboard">
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
admin/Category/add">
                                <i class="fa fa-angle-right"></i> &nbsp;Add Category
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/Category/view">
                                <i class="fa fa-angle-right"></i> &nbsp;View Categories
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/Category/viewsub">
                                <i class="fa fa-angle-right"></i> &nbsp;View Sub Categories
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
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Orders
                            </a>
                            <ul class="sub-menu sub-submenu">
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/sales/orders?type=pending">
                                        <i class="fa fa-angle-right"></i> &nbsp;Pending Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/sales/orders?type=approved">
                                        <i class="fa fa-angle-right"></i> &nbsp;Approved Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/sales/orders?type=rejected">
                                        <i class="fa fa-angle-right"></i> &nbsp;Rejected Orders
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Returns
                            </a>
                            <ul class="sub-menu sub-submenu">
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/sales/returns?type=pending">
                                        <i class="fa fa-angle-right"></i> &nbsp;Pending Returns
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/sales/returns?type=approved">
                                        <i class="fa fa-angle-right"></i> &nbsp;Approved Returns
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/sales/returns?type=rejected">
                                        <i class="fa fa-angle-right"></i> &nbsp;Rejected Orders
                                    </a>
                                </li>
                            </ul>

                        </li>
                            <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Vouchers
                            </a>
                            <ul class="sub-menu sub-submenu">
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/sales/vouchers?action=create">
                                        <i class="fa fa-angle-right"></i> &nbsp;Create
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/sales/vouchers?action=view"">
                                        <i class="fa fa-angle-right"></i> &nbsp;View
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;">
                        <i class="fa fa-users"></i> &nbsp;Customers
                        <span class="fa arrow"></span>

                    </a>
                    <ul class="sub-menu sub-submenu">
                        <li>
                            <a  href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/customers?filter=all">
                                <i class="fa fa-angle-right"></i> &nbsp;All Users
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/customers?filter=active">
                                <i class="fa fa-angle-right"></i> &nbsp;Active Users
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/customers?filter=inactive">
                                <i class="fa fa-angle-right"></i> &nbsp;Inactive Users
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/customers?filter=disabled">
                                <i class="fa fa-angle-right"></i> &nbsp;Disabled Users
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-history"></i> &nbsp;Download Reports
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu sub-submenu">
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Sales Reports
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Products Reports
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Customers Reports
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