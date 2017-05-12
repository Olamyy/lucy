<?php /* Smarty version 3.1.24, created on 2017-04-15 18:46:48
         compiled from "public/_template/front/registry/find.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:182949927758f25c88c4a051_57823094%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2423e6319910f294ae49a1b0417dc2205962a1d7' => 
    array (
      0 => 'public/_template/front/registry/find.tpl',
      1 => 1492278404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182949927758f25c88c4a051_57823094',
  'variables' => 
  array (
    'error' => 0,
    'err' => 0,
    'BASE_URL' => 0,
    'registry_search_details' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58f25c88c8efb6_14112640',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f25c88c8efb6_14112640')) {
function content_58f25c88c8efb6_14112640 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '182949927758f25c88c4a051_57823094';
echo $_smarty_tpl->getSubTemplate ("../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('../navmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-12 col-sm-6 sign-in">
                    <h4 class="">Find a registry</h4>
                    <p class="">Enter a registry detail below to find.</p>
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
registry/find">
                        <input type="hidden" value="login" name="action">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Registry Detail<span>*</span></label>
                            <input type="text" name="registry_search_query" placeholder="You can search by registry name or couples email." class="form-control unicase-form-control text-input">
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Search</button>
                    </form>
                </div>
                <!-- Sign-in -->

                <!-- create a new account -->

                <!-- create a new account -->			</div><!-- /.row -->
        </div><!-- /.sigin-in-->

    </div><!-- /.logo-slider -->

</div><!-- /.container -->

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['registry_search_details']->value)===null||$tmp==='' ? '' : $tmp)) {?>
<br>
<div class="body-content">
    <div class="container">
        <div class="my-wishlist-page">
            <div class="row">
                <div class="col-md-12 my-wishlist">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th colspan="4" class="heading-title">Search Results</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->tpl_vars['registry_search_details']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['data']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$foreach_data_Sav = $_smarty_tpl->tpl_vars['data'];
?>
                            <tr>
                                <td class="col-md-3"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['dashboard_image'];?>
" alt="imga"></td>
                                <td class="col-md-5">
                                    <div class="product-name"><a href="#"><?php echo $_smarty_tpl->tpl_vars['data']->value['groom_first_name'];?>
 & <?php echo $_smarty_tpl->tpl_vars['data']->value['bride_first_name'];?>
</a></div>
                                </td>
                                <td class="col-md-7">
                                    <div class="product-name"> Wedding Date : <?php echo $_smarty_tpl->tpl_vars['data']->value['wedding_date'];?>
</div>
                                </td>
                                <td class="col-md-2">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['data']->value['registry_url_tag'];?>
" class="btn-upper btn btn-primary">Visit Registry</a>
                                </td>
                            </tr>
                            <?php
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
}
?>
                            </tbody>
                        </table>
                    </div>
                </div>			</div><!-- /.row -->
        </div>
    </div>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("../registry/couple/share/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>