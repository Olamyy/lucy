<?php /* Smarty version 3.1.24, created on 2017-03-02 14:08:57
         compiled from "public/_template/front/registry/couple/track/track.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29799820858b81969dfdaf0_04463272%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1135aab3cd51fc16c3c627322eb7e56d140c607e' => 
    array (
      0 => 'public/_template/front/registry/couple/track/track.tpl',
      1 => 1488459830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29799820858b81969dfdaf0_04463272',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58b81969e131b1_21268635',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b81969e131b1_21268635')) {
function content_58b81969e131b1_21268635 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29799820858b81969dfdaf0_04463272';
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
                        <p class="">Track a product</p>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="You can search for a product by name.">
                    </div>
                        <div class="social-sign-in outer-top-xs pull-right">
                            <button type="submit" class="button btn-sm btn-primary"><i class=""></i>Track Product</button>
                        </div>
                </div>
		</div>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("../share/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>