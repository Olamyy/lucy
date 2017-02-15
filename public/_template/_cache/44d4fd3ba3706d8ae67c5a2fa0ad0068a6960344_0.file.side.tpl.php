<?php /* Smarty version 3.1.24, created on 2017-02-14 19:29:32
         compiled from "/var/www/html/lucyregistry/public/_template/front/side.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:96776027258a34c8c1db2b4_68499156%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44d4fd3ba3706d8ae67c5a2fa0ad0068a6960344' => 
    array (
      0 => '/var/www/html/lucyregistry/public/_template/front/side.tpl',
      1 => 1487096653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96776027258a34c8c1db2b4_68499156',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58a34c8c1ec8e1_83900840',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a34c8c1ec8e1_83900840')) {
function content_58a34c8c1ec8e1_83900840 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '96776027258a34c8c1db2b4_68499156';
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

                    <?php echo $_smarty_tpl->getSubTemplate ("./banners.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>