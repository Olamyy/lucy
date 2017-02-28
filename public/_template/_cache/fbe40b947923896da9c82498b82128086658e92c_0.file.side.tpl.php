<?php /* Smarty version 3.1.24, created on 2017-02-14 20:49:44
         compiled from "/var/www/html/lucyregistry/public/_template/front/registry/couple/dashboard/side.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:198106460558a35f581a44c3_90909763%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbe40b947923896da9c82498b82128086658e92c' => 
    array (
      0 => '/var/www/html/lucyregistry/public/_template/front/registry/couple/dashboard/side.tpl',
      1 => 1487096653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198106460558a35f581a44c3_90909763',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58a35f58258ed1_88509888',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a35f58258ed1_88509888')) {
function content_58a35f58258ed1_88509888 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '198106460558a35f581a44c3_90909763';
?>
<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <div class="row">
                <!-- ============================================== SIDEBAR ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                    <!-- ============================================== HOT DEALS ============================================== -->
                    <?php echo $_smarty_tpl->getSubTemplate ("./couplesmalldetails.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    <!-- ================================================ SPECIAL OFFERS =====================================-->

                    <?php echo $_smarty_tpl->getSubTemplate ("./wizard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                </div>

                    <!--============================================== BANNERS ============================================== -->

                    
<?php }
}
?>