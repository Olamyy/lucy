<?php /* Smarty version 3.1.24, created on 2017-01-17 06:13:24
         compiled from "public/_template/front/auth.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1922972922587da7f456c284_75517016%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f31da410d8a72fd49c084bc41b559e94fb6215e' => 
    array (
      0 => 'public/_template/front/auth.tpl',
      1 => 1484629998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1922972922587da7f456c284_75517016',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_587da7f458ea28_66072441',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587da7f458ea28_66072441')) {
function content_587da7f458ea28_66072441 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1922972922587da7f456c284_75517016';
echo $_smarty_tpl->getSubTemplate ('./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('./navmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/">Home</a></li>
                <li class='active'>Login</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-6 col-sm-6 sign-in">
                    <h4 class="">Sign in</h4>
                    <p class="">Hello, Sign In to Continue your order.</p>
                    <div class="social-sign-in outer-top-xs">
                        <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
                        <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
                    </div>
                    <form class="register-form outer-top-xs" role="form">
                        <input type="hidden" value="login" name="action">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
                        </div>
                        <div class="radio outer-xs">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
                            </label>
                            <a href="#" class="forgot-password pull-right">Forgot your Password?</a>
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                    </form>
                </div>
                <!-- Sign-in -->

                <!-- create a new account -->
                <div class="col-md-6 col-sm-6 create-new-account">
                    <h4 class="checkout-subtitle">Create a new account</h4>
                    <p class="text title-tag-line">Create your new account.</p>
                    <form class="register-form outer-top-xs" role="form">
                        <input type="hidden" value="registration" name="action">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">First Name <span>*</span></label>
                            <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="firstname">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Last Name <span>*</span></label>
                            <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="lastname">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" name="email">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail2">Address<span>*</span></label>
                            <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail2" name="address">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="city">City<span>*</span></label>
                            <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail2" name="city" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
                            <input type="number" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="password" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="password">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="confirm_password" >
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
                    </form>


                </div>
                <!-- create a new account -->			</div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->


        </div><!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
<!-- ============================================================= FOOTER ============================================================= -->

<?php echo $_smarty_tpl->getSubTemplate ("./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>