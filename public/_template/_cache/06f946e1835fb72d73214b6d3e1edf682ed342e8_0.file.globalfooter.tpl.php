<?php /* Smarty version 3.1.24, created on 2017-02-23 07:56:06
         compiled from "/var/www/html/lucy/public/_template/admin/globalfooter.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:123465349358ae8787011886_35610355%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f946e1835fb72d73214b6d3e1edf682ed342e8' => 
    array (
      0 => '/var/www/html/lucy/public/_template/admin/globalfooter.tpl',
      1 => 1487677328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123465349358ae8787011886_35610355',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ae878701d2e8_45537149',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ae878701d2e8_45537149')) {
function content_58ae878701d2e8_45537149 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '123465349358ae8787011886_35610355';
?>
<!-- /#wrap -->
<!-- global scripts-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/js/components.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/js/custom.js"><?php echo '</script'; ?>
>
<!-- global scripts end-->
<?php }
}
?>