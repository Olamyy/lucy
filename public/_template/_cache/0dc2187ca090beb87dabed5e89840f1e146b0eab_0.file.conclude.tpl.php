<?php /* Smarty version 3.1.24, created on 2017-02-14 20:49:31
         compiled from "public/_template/front/registry/couple/conclude.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:115033360858a35f4b48ea53_80992342%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dc2187ca090beb87dabed5e89840f1e146b0eab' => 
    array (
      0 => 'public/_template/front/registry/couple/conclude.tpl',
      1 => 1487096653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115033360858a35f4b48ea53_80992342',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'error' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58a35f4b4dda70_24508452',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a35f4b4dda70_24508452')) {
function content_58a35f4b4dda70_24508452 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '115033360858a35f4b48ea53_80992342';
echo $_smarty_tpl->getSubTemplate ('../../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('../../navmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/">Home</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/registry/couple/init">Details</a></li>
                <li class='active'>Finish</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-12 col-sm-6 sign-in">
                    <h4 class="">Start Your Registry</h4>
                    <p class="">Let's get to know you</p>
                    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp)) {?>
                        <div class="alert alert-danger">
                            <strong>Oops! Something went wrong</strong>
                            <?php
$_from = $_smarty_tpl->tpl_vars['error']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['err']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
$foreach_err_Sav = $_smarty_tpl->tpl_vars['err'];
?>
                                <p><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</p>
                            <?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
                        </div>
                    <?php }?>
                    <form class="register-form outer-top-xs" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/registry/couple/init/conclude">
                        <div class="form-group">
                        <label for="basic-url">Your registry URL<span>*</span></label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon3" style="color: grey"><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/registry/</span>
                            <input type="text" name="reg_url" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Your registry URL tag">
                        </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Wedding Date</label>
                            <input type="text" name="wedding_date" placeholder="DD-MM-YYYY"  class="form-control unicase-form-control text-input" id="wedding_date" >
                        </div>
                        <div class="form-group">
                            <input type="checkbox" aria-label="" id="NoDate"">
                            <label class="info-title" for="NoDat"">We haven't picked a date yet</label>
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Finish</button>
                    </form>
                </div>
                <!-- Sign-in -->

                <!-- create a new account -->

                <!-- create a new account -->			</div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->


    </div><!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
<!-- ============================================================= FOOTER ============================================================= -->

<?php echo $_smarty_tpl->getSubTemplate ("../../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>