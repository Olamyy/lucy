<?php /* Smarty version 3.1.24, created on 2017-01-18 05:25:13
         compiled from "/var/www/html/lucy/public/_template/admin/product/category/edit/editfooter.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:781020074587eee2922b574_97239339%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f00e709c63e7e79d9d4c19f07ac35f97e1ea560f' => 
    array (
      0 => '/var/www/html/lucy/public/_template/admin/product/category/edit/editfooter.tpl',
      1 => 1484713439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '781020074587eee2922b574_97239339',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_587eee2923cdf1_06067880',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587eee2923cdf1_06067880')) {
function content_587eee2923cdf1_06067880 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '781020074587eee2922b574_97239339';
?>
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

<!-- end of global scripts-->
<!-- plugin scripts -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/vendors/select2/js/select2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/vendors/datatables/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/vendors/datatables/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- end plugin scripts -->
<!--Page level scripts-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/js/pages/advanced_tables.js"><?php echo '</script'; ?>
>
<!-- end of global scripts-->

</body>

<!-- Mirrored from dev.lorvent.com/admire/advanced_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jan 2017 10:10:23 GMT -->
</html><?php }
}
?>