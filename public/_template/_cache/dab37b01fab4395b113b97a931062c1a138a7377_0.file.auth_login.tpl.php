<?php /* Smarty version 3.1.24, created on 2017-03-05 07:09:40
         compiled from "public/_template/front/registry/auth/auth_login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21558622158bbaba492a588_41110276%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dab37b01fab4395b113b97a931062c1a138a7377' => 
    array (
      0 => 'public/_template/front/registry/auth/auth_login.tpl',
      1 => 1488460600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21558622158bbaba492a588_41110276',
  'variables' => 
  array (
    'error' => 0,
    'err' => 0,
    'BASE_URL' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58bbaba4b569a4_28518070',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58bbaba4b569a4_28518070')) {
function content_58bbaba4b569a4_28518070 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21558622158bbaba492a588_41110276';
echo $_smarty_tpl->getSubTemplate ('../../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('../../navmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <div class="col-md-12 col-sm-6 sign-in">
                    <h4 class="">Sign in</h4>
                    <p class="">Hello, sign in to continue to your wedding registry.</p>
                    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp)) {?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
index.php/auth/login?redirect=<?php if ((($tmp = @$_smarty_tpl->tpl_vars['session']->value[0]['from'])===null||$tmp==='' ? '' : $tmp) == "create_nav") {?>init<?php } else {
}?>">
                        <input type="hidden" value="login" name="action">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                            <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                            <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign In</button>
                    </form>
                    <div class="social-sign-in outer-top-xs pull-right">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
auth/join" class="button btn-success"><i class=""></i>Click here to sign up</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ('../couple/dashboard/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>