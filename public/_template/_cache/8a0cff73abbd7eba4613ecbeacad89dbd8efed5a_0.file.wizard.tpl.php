<?php /* Smarty version 3.1.24, created on 2017-02-24 18:32:25
         compiled from "/var/www/html/lucy/public/_template/front/registry/couple/dashboard/wizard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:196091469258b06e297003b7_13913255%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a0cff73abbd7eba4613ecbeacad89dbd8efed5a' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/registry/couple/dashboard/wizard.tpl',
      1 => 1487957503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196091469258b06e297003b7_13913255',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58b06e2971a865_36569810',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b06e2971a865_36569810')) {
function content_58b06e2971a865_36569810 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '196091469258b06e297003b7_13913255';
?>
<div class="sidebar-widget product-tag wow fadeInUp">
    <h3 class="section-title">Registry TODO</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <ul>
            <li class="tag-list">
                <a class="item" title="Phone" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/action/manage" >Upload A Couple Photo</a>
            </li>
            <li class="tag-list">
                <a class="item" title="Phone" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" >Add Gifts</a>
            </li>
            <li class="tag-list">
                <a class="item" title="Phone" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/action/settings" >Setup Shipping</a>
            </li>
            <li class="tag-list">
                <a class="item" title="Phone" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/manage">Invite Partner</a>
            </li>
            <li class="tag-list">
                <a class="item" title="Phone"  href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/live">Go Live</a>
            </li>
            <li class="tag-list">
                <a class="item" title="Phone" >Receive Gifts</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-widget-body -->
</div><?php }
}
?>