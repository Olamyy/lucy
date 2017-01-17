<?php /* Smarty version 3.1.24, created on 2017-01-17 05:09:46
         compiled from "/var/www/html/lucy/public/_template/front/side.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:113436029587d990a7895f6_67043434%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dca2729d2e880de19910092cde1b1c20b9779a5' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/side.tpl',
      1 => 1484626184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113436029587d990a7895f6_67043434',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_587d990a7a8872_45796739',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587d990a7a8872_45796739')) {
function content_587d990a7a8872_45796739 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '113436029587d990a7895f6_67043434';
?>
<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <div class="row">
                <!-- ============================================== SIDEBAR ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                    <!-- ============================================== HOT DEALS ============================================== -->
                    <?php echo $_smarty_tpl->getSubTemplate ("./hotdeals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    <!-- ================================================ SPECIAL OFFERS =====================================-->

                    <?php echo $_smarty_tpl->getSubTemplate ("./specialoffers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


                    <!--============================================== SPECIAL DEALS ============================================== -->

                    <?php echo $_smarty_tpl->getSubTemplate ("./specialdeals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



                    <!--============================================== NEWSLETTER ============================================== -->

                    <?php echo $_smarty_tpl->getSubTemplate ("./sidenewsletter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



                    <!--============================================== TESTIMONIALS ============================================== -->

                    <?php echo $_smarty_tpl->getSubTemplate ("./testimonials.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



                    <!--============================================== BANNERS ============================================== -->

                    
<?php }
}
?>