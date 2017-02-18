<?php /* Smarty version 3.1.24, created on 2017-01-21 09:10:16
         compiled from "public/_template/front/couple/conclude.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:134915737758831768657c23_44922365%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c19a17fa594a4bc91b9da2f25aa8d5ee60aa1551' => 
    array (
      0 => 'public/_template/front/couple/conclude.tpl',
      1 => 1484986115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134915737758831768657c23_44922365',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'error' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58831768689f65_12780078',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58831768689f65_12780078')) {
function content_58831768689f65_12780078 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '134915737758831768657c23_44922365';
echo $_smarty_tpl->getSubTemplate ('../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('../navmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/">Home</a></li>
                <li class='active'>Join</li>
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
index.php/couple/init">
                        <div class="form-group">
                        <label for="basic-url">Your registry URL<span>*</span></label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon3" style="color: grey"><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/registry/</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
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
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Next</button>
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

<?php echo $_smarty_tpl->getSubTemplate ("../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>