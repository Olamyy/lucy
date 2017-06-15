<?php /* Smarty version 3.1.24, created on 2017-06-15 04:16:54
         compiled from "/var/www/html/lucy/public/_template/front/navmenu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4037582235941fc26cf1333_36589912%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e676c75439b7749b3ccebaf66c43d3fcafaf786' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/navmenu.tpl',
      1 => 1497496612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4037582235941fc26cf1333_36589912',
  'variables' => 
  array (
    'user_details' => 0,
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
    'pre_cart' => 0,
    'data' => 0,
    'cat_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5941fc26d39671_19296926',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5941fc26d39671_19296926')) {
function content_5941fc26d39671_19296926 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4037582235941fc26cf1333_36589912';
if ((($tmp = @$_smarty_tpl->tpl_vars['user_details']->value)===null||$tmp==='' ? '' : $tmp)) {?>
  <input type="hidden" id="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user_details']->value[0]['user_id'];?>
">
  <?php }?>

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
                <li class="dropdown yamm-fw">
                  <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <div class="logo"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/front/assets/images/lucylogo.png" alt="logo" height="30"> </a> </div>
                </li>
                <li class="dropdown"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" onclick='location.href ="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/base"'>Gift Registry</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/find">Find Registry</a></li>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
auth/join">Create Registry</a></li>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
auth/login">Manage Registry</a></li>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/base">Why Lucy Registry?</a></li>
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
                  
                    <li class="dropdown"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
category?cat_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['category_id'];?>
" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" onclick="location.href ='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
category?cat_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['category_id'];?>
'"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a>
                      <ul class="dropdown-menu pages">
                        <li>
                          <div class="yamm-content">
                            <div class="row">
                              <div class="col-xs-12 col-menu">
                                <ul class="links">
                                  <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['pre_cat'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat_cart'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat_cart']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['cat_cart']->value) {
$_smarty_tpl->tpl_vars['cat_cart']->_loop = true;
$foreach_cat_cart_Sav = $_smarty_tpl->tpl_vars['cat_cart'];
?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
subcart?p_id=<?php echo $_smarty_tpl->tpl_vars['cat_cart']->value;?>
&c_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat_cart']->value;?>
</a></li>
                                  <?php
$_smarty_tpl->tpl_vars['cat_cart'] = $foreach_cat_cart_Sav;
}
?>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                  
                <?php
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
}
?>
                </ul>
                </div>
        </li>
        </ul>
        </li>

        <?php }?>
          </div>
        </div>
      </div>
    </div>
<?php }
}
?>