<?php /* Smarty version 3.1.24, created on 2017-05-15 17:49:07
         compiled from "/var/www/html/lucy/public/_template/front/registry/couple/dashboard/side.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1657016705919dc03f323a0_02214696%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '905a7fba700ad170e2fcb7d1a913455499a91b32' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/registry/couple/dashboard/side.tpl',
      1 => 1494866946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1657016705919dc03f323a0_02214696',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5919dc03f3fad3_13161754',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5919dc03f3fad3_13161754')) {
function content_5919dc03f3fad3_13161754 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1657016705919dc03f323a0_02214696';
?>
<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                        <?php echo $_smarty_tpl->getSubTemplate ("./couplesmalldetails.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                        <?php echo $_smarty_tpl->getSubTemplate ("./wizard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                </div>

<?php }
}
?>