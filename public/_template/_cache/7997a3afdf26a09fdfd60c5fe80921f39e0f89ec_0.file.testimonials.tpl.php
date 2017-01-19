<?php /* Smarty version 3.1.24, created on 2017-01-17 08:53:19
         compiled from "/var/www/html/lucy/public/_template/front/testimonials.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1021811425587dcd6f5c2e33_90857838%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7997a3afdf26a09fdfd60c5fe80921f39e0f89ec' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/testimonials.tpl',
      1 => 1484639546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1021811425587dcd6f5c2e33_90857838',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_587dcd6f5d88c0_98355584',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587dcd6f5d88c0_98355584')) {
function content_587dcd6f5d88c0_98355584 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1021811425587dcd6f5c2e33_90857838';
?>
<div class="sidebar-widget  wow fadeInUp outer-top-vs ">
    <div id="advertisement" class="advertisement">
        <div class="item">
            <div class="avatar"><img src="http://placehold.it/269x270" alt="Image"></div>
            <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
            <div class="clients_author">John Doe <span>Abc Company</span> </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.item -->

        <div class="item">
            <div class="avatar"><img src="http://placehold.it/269x270" alt="Image"></div>
            <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
            <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
        </div>
        <!-- /.item -->

        <div class="item">
            <div class="avatar"><img src="http://placehold.it/269x270" alt="Image"></div>
            <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
            <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.item -->

    </div>
    <!-- /.owl-carousel -->
</div>

<!-- ============================================== Testimonials: END ============================================== -->

<div class="home-banner"> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/front/assets/images/banners/LHS-banner.jpg" alt="Image"> </div>
</div><?php }
}
?>