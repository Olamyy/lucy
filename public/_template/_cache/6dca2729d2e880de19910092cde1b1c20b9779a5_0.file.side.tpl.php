<?php /* Smarty version 3.1.24, created on 2017-02-21 12:47:34
         compiled from "/var/www/html/lucy/public/_template/front/side.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:149708208058ac28d6aafd90_28239800%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dca2729d2e880de19910092cde1b1c20b9779a5' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/side.tpl',
      1 => 1487677328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149708208058ac28d6aafd90_28239800',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ac28d6abfd79_64420191',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ac28d6abfd79_64420191')) {
function content_58ac28d6abfd79_64420191 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '149708208058ac28d6aafd90_28239800';
?>
<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <div class="row">
                <!-- ============================================== SIDEBAR ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                    <?php echo $_smarty_tpl->getSubTemplate ("./hotdeals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    <?php echo $_smarty_tpl->getSubTemplate ("./specialoffers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    <?php echo $_smarty_tpl->getSubTemplate ("./banners.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>