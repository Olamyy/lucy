<?php /* Smarty version 3.1.24, created on 2017-05-10 01:52:47
         compiled from "public/_template/front/registry/auth/auth_reg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20460970595912645f47e7b8_65995346%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2532b26bdf69fb42236ee3f8f0d9e31fbac95f8' => 
    array (
      0 => 'public/_template/front/registry/auth/auth_reg.tpl',
      1 => 1494377566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20460970595912645f47e7b8_65995346',
  'variables' => 
  array (
    'error' => 0,
    'err' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5912645f565ed8_57535529',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5912645f565ed8_57535529')) {
function content_5912645f565ed8_57535529 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20460970595912645f47e7b8_65995346';
echo $_smarty_tpl->getSubTemplate ('../../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('../../navmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <div class="col-md-12 col-sm-6 sign-in">
                    <h4 class="">Sign Up</h4>
                    <p class="">Fill the form below to start..</p>
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
auth/join">
                        <input type="hidden" value="login" name="action">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                            <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                            <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
                        </div>
                        <div class="sidebar-widget product-tag wow fadeInUp outer-top-vs">
                            <h3 class="section-title">Registry Type</h3>
                            <div class="sidebar-widget-body outer-top-xs">
                                <div class="tag-list"> <a class="item" title="Phone" id="wedding" href="#">Wedding</a>
                                    <a class="item" id="birthday">Birthday</a>
                                    <a class="item" id="anniv">Wedding Anniversary </a>
                                    <a class="item" id="houseWarming">House Warming</a>
                                    <a class="item" id="childNaming">Child Naming</a>
                                    <a class="item" id="lucky">Feeling Lucky</a>
                            </div>
                        </div>
                            <input type="hidden" id="regType" name="regType" value="">
                            <div class="social-sign-in outer-top-xs pull-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
auth/login" class="button btn-success"><i class=""></i>Click here to sign in</a>
                        </div>

                            <br>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("../../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>