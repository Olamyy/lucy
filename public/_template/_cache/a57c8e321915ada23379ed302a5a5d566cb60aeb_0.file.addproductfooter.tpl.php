<?php /* Smarty version 3.1.24, created on 2017-04-11 10:28:50
         compiled from "/var/www/html/lucy/public/_template/admin/product/addproductfooter.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:206084747358eca1d2e6c5e1_90890119%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a57c8e321915ada23379ed302a5a5d566cb60aeb' => 
    array (
      0 => '/var/www/html/lucy/public/_template/admin/product/addproductfooter.tpl',
      1 => 1487677328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206084747358eca1d2e6c5e1_90890119',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58eca1d2e9e5f5_47232445',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58eca1d2e9e5f5_47232445')) {
function content_58eca1d2e9e5f5_47232445 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '206084747358eca1d2e6c5e1_90890119';
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
<!-- end of global scripts-->
<!--Plugin scripts-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/vendors/twitter-bootstrap-wizard/js/jquery.bootstrap.wizard.min.js"><?php echo '</script'; ?>
>
<!--End of plugin scripts-->
<!--Page level scripts-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/js/pages/wizard.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/vendors/fileinput/js/fileinput.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/vendors/fileinput/js/theme.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/js/form.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/js/pages/form_elements.js"><?php echo '</script'; ?>
>

<!-- end page level scripts -->
</body>

</html><?php }
}
?>