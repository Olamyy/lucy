<?php /* Smarty version 3.1.24, created on 2017-01-24 08:17:20
         compiled from "/var/www/html/lucy/public/_template/front/registry/couple/dashboard/side.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5200881805886ff800d14d1_70943935%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '905a7fba700ad170e2fcb7d1a913455499a91b32' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/registry/couple/dashboard/side.tpl',
      1 => 1485242113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5200881805886ff800d14d1_70943935',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5886ff800e3016_50806609',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5886ff800e3016_50806609')) {
function content_5886ff800e3016_50806609 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5200881805886ff800d14d1_70943935';
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