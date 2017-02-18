<?php /* Smarty version 3.1.24, created on 2017-02-17 13:53:47
         compiled from "/var/www/html/lucy/public/_template/front/side.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:75144358558a6f25bb2cb58_04491106%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dca2729d2e880de19910092cde1b1c20b9779a5' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/side.tpl',
      1 => 1487335895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75144358558a6f25bb2cb58_04491106',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58a6f25bb4d048_26603661',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a6f25bb4d048_26603661')) {
function content_58a6f25bb4d048_26603661 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '75144358558a6f25bb2cb58_04491106';
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