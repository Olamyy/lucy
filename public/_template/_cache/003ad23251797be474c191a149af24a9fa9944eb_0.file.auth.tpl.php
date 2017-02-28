<?php /* Smarty version 3.1.24, created on 2017-02-23 07:56:06
         compiled from "public/_template/admin/auth.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:33217377658ae8786e950f6_01098076%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '003ad23251797be474c191a149af24a9fa9944eb' => 
    array (
      0 => 'public/_template/admin/auth.tpl',
      1 => 1487677328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33217377658ae8786e950f6_01098076',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'error' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ae8786eda472_03124152',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ae8786eda472_03124152')) {
function content_58ae8786eda472_03124152 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '33217377658ae8786e950f6_01098076';
echo $_smarty_tpl->getSubTemplate ('./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
    <div class="row">
        <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-10 push-sm-1 login_top_bottom">
            <div class="row">
                <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12">
                    <div class="bg-white login_content login_border_radius">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/admin/login"  method="post" id="admin_auth">
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
                            <div class="form-group">
                                <label for="" class="form-control-label"> Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="fa fa-user text-primary"></i></span>
                                    <input type="text" class="form-control  form-control-md" id="" name="username" placeholder="Username">
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group">
                                <label for="password" class="form-control-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon addon_password"><i
                                                class="fa fa-lock text-primary"></i></span>
                                    <input type="password" class="form-control form-control-md" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("./globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>