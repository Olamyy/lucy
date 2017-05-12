<?php /* Smarty version 3.1.24, created on 2017-04-15 19:35:32
         compiled from "/var/www/html/lucy/public/_template/front/side_category.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:36439933058f267f4be62e4_07298628%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f3f8dc0952d1d80b29767a8ff16b5dbac18f329' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/side_category.tpl',
      1 => 1492281327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36439933058f267f4be62e4_07298628',
  'variables' => 
  array (
    'category_list' => 0,
    'BASE_URL' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58f267f4bffa88_25110125',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f267f4bffa88_25110125')) {
function content_58f267f4bffa88_25110125 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '36439933058f267f4be62e4_07298628';
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
                    </ul>
                </div>
            </div>
            <div class="sidebar-widget wow fadeInUp outer-top-vs">
                <h3 class="section-title">Compare products</h3>
                <div class="sidebar-widget-body">
                    <div class="compare-report">
                        <p>You have no <span>item(s)</span> to compare</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
?>