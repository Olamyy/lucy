<?php /* Smarty version 3.1.24, created on 2017-01-22 18:43:20
         compiled from "/var/www/html/lucy/public/_template/front/side.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1175415275884ef383f0e41_88805894%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dca2729d2e880de19910092cde1b1c20b9779a5' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/side.tpl',
      1 => 1485106983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1175415275884ef383f0e41_88805894',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5884ef384108d3_72323868',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5884ef384108d3_72323868')) {
function content_5884ef384108d3_72323868 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1175415275884ef383f0e41_88805894';
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