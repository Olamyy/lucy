<?php /* Smarty version 3.1.24, created on 2017-06-04 10:08:29
         compiled from "/var/www/html/lucy/public/_template/front/side_category.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4451752615933ce0d84f1c3_52903656%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f3f8dc0952d1d80b29767a8ff16b5dbac18f329' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/side_category.tpl',
      1 => 1496567307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4451752615933ce0d84f1c3_52903656',
  'variables' => 
  array (
    'is_sub' => 0,
    'sub_cart' => 0,
    'category' => 0,
    'BASE_URL' => 0,
    'category_' => 0,
    'category_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5933ce0d87d841_09626348',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5933ce0d87d841_09626348')) {
function content_5933ce0d87d841_09626348 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4451752615933ce0d84f1c3_52903656';
?>
<div class='col-md-3 sidebar'>
    <div class="sidebar-module-container">
        <div class="sidebar-filter">
            <div class="sidebar-widget wow fadeInUp">
                <div class="widget-header">
                    <h4 class="widget-title">More Categories</h4>
                </div>
                <div class="sidebar-widget-body">
                    <ul class="list">
                        <?php if ($_smarty_tpl->tpl_vars['is_sub']->value == 1) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['sub_cart']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['category']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$foreach_category_Sav = $_smarty_tpl->tpl_vars['category'];
?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['category']->value['sub_cat'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['category_'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['category_']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['category_']->value) {
$_smarty_tpl->tpl_vars['category_']->_loop = true;
$foreach_category__Sav = $_smarty_tpl->tpl_vars['category_'];
?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
subcart?p_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
&c_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category_']->value;?>
</a></li>
                                <?php
$_smarty_tpl->tpl_vars['category_'] = $foreach_category__Sav;
}
?>
                            <?php
$_smarty_tpl->tpl_vars['category'] = $foreach_category_Sav;
}
?>
                        <?php } else { ?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['category_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['category']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$foreach_category_Sav = $_smarty_tpl->tpl_vars['category'];
?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
category?cat_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['category'] = $foreach_category_Sav;
}
?>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
?>