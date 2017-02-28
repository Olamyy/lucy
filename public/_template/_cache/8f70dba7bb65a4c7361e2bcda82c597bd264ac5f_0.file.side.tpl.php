<?php /* Smarty version 3.1.24, created on 2017-02-21 17:01:38
         compiled from "/var/www/html/lucyreg/public/_template/front/side.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:110015716658ac64626b9bb7_39123882%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f70dba7bb65a4c7361e2bcda82c597bd264ac5f' => 
    array (
      0 => '/var/www/html/lucyreg/public/_template/front/side.tpl',
      1 => 1487677328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110015716658ac64626b9bb7_39123882',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ac64626ca668_92462821',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ac64626ca668_92462821')) {
function content_58ac64626ca668_92462821 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '110015716658ac64626b9bb7_39123882';
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