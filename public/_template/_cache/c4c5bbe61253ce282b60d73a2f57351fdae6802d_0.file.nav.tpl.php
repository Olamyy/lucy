<?php /* Smarty version 3.1.24, created on 2017-06-07 19:50:31
         compiled from "/var/www/html/lucy/public/_template/front/registry/couple/dashboard/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:106298252559384af795d4f3_62682517%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4c5bbe61253ce282b60d73a2f57351fdae6802d' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/registry/couple/dashboard/nav.tpl',
      1 => 1496861429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106298252559384af795d4f3_62682517',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'complete_details' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59384af7986f02_00586140',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59384af7986f02_00586140')) {
function content_59384af7986f02_00586140 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '106298252559384af795d4f3_62682517';
?>
</div>
<div class="main-header">
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
registry/dashboard" id="dashboard">Dashboard</a> </li>
                            <li class=""> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/action/manage" id="manage">Manage Registry</a> </li>
                            <li class=""> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/action/share" id="share">Share</a> </li>
                            <li class=""> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/action/track" id="track">Track</a> </li>
                            <li class="dropdown"> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">My Account</a>
                                <ul class="dropdown-menu pages">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-menu">
                                                    <ul class="links">
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/action/settings">Account Settings</a></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/action/help">Help</a></li>
                                                        <input type="hidden" id="base_url" value="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">
                                                        <input type="hidden" id="user_id" value="<?php echo $_smarty_tpl->tpl_vars['complete_details']->value[0]['user_id'];?>
">
                                                        <input type="hidden" id="user_ip" value="<?php echo $_smarty_tpl->tpl_vars['complete_details']->value[0]['ip'];?>
">
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/action/logout" id="logout_btn">Logout</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
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