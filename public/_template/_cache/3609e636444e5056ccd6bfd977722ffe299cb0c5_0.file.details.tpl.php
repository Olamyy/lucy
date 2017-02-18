<?php /* Smarty version 3.1.24, created on 2017-02-14 20:47:37
         compiled from "public/_template/front/registry/couple/details.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:143678141458a35ed98773f9_11845328%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3609e636444e5056ccd6bfd977722ffe299cb0c5' => 
    array (
      0 => 'public/_template/front/registry/couple/details.tpl',
      1 => 1487096653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143678141458a35ed98773f9_11845328',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'error' => 0,
    'err' => 0,
    'user_session' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58a35ed98c7ea1_08955926',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a35ed98c7ea1_08955926')) {
function content_58a35ed98c7ea1_08955926 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '143678141458a35ed98773f9_11845328';
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
index.php/registry">Registry</a></li>
                <li class='active'>Couple Details</li>
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
                    <?php if ($_smarty_tpl->tpl_vars['user_session']->value['coming_from'] == "create_nav") {?>
                        <?php } else { ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Hi, <br> We noticed <b>you</b> have a pending registration so we brought you here to continue it.</strong><br>
                            <strong class="alert-link">However, you can restart your registration by clicking <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/auth/login/nosession">here.</a> </strong>
                        </div>
                    <?php }?>

                    <form class="register-form outer-top-xs" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/registry/couple/init">
                        <div class="form-group">
                            <h4 class="">Groom Details</h4>
                            <label class="info-title" for="groom_first_name">First Name<span>*</span></label>
                            <input type="text" name="groom_first_name" required placeholder="Groom's first name" class="form-control unicase-form-control text-input" id="groom_first_name" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="groom_last_name">Last Name<span>*</span></label>
                            <input type="text" name="groom_last_name" required placeholder="Groom's last name"  class="form-control unicase-form-control text-input" id="groom_last_name" >
                        </div>
                        <hr>
                        <div class="form-group">
                        <h4 class="">Bride Details</h4>
                        <label class="info-title" for="spouse_first_name">First Name<span>*</span></label>
                        <input type="text" name="spouse_first_name"  placeholder="Bride's first name" required class="form-control unicase-form-control text-input" id="spouse_first_name" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="spouse_last_name">Last Name<span>*</span></label>
                            <input type="text" name="spouse_last_name" placeholder="Bride's last name" required class="form-control unicase-form-control text-input" id="spouse_last_name" >
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="info-title" for="spouse_email">Partner email</label>
                            <input type="email" name="spouse_email"  placeholder="This is optional"  class="form-control unicase-form-control text-input" id="spouse_email" >
                        </div>
                        <br>
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

<?php echo $_smarty_tpl->getSubTemplate ("../../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>