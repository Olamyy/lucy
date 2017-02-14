<?php /* Smarty version 3.1.24, created on 2017-02-11 18:34:14
         compiled from "public/_template/front/registry/couple/track/track.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:46343896589f4b16b9ab39_77480578%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1135aab3cd51fc16c3c627322eb7e56d140c607e' => 
    array (
      0 => 'public/_template/front/registry/couple/track/track.tpl',
      1 => 1486187139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46343896589f4b16b9ab39_77480578',
  'variables' => 
  array (
    'error' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_589f4b16bebd22_70951049',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589f4b16bebd22_70951049')) {
function content_589f4b16bebd22_70951049 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '46343896589f4b16b9ab39_77480578';
echo $_smarty_tpl->getSubTemplate ('../../../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('../../couple/dashboard/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-12 col-sm-6 sign-in">
                    <h4 class="">Product Track</h4>
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
                        <p class="">Track a product</p>
                        <div class="form-group">
                        </div>
                        <div class="social-sign-in outer-top-xs pull-right">
                            <button type="submit" class="button btn-sm btn-primary"><i class=""></i>Track Product</button>
                        </div>
                </div>
		</div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->


    </div><!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
<!-- ============================================================= FOOTER ============================================================= -->

<?php echo $_smarty_tpl->getSubTemplate ("../share/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>