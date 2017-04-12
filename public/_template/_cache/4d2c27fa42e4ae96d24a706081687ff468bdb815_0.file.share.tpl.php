<?php /* Smarty version 3.1.24, created on 2017-03-02 14:02:37
         compiled from "public/_template/front/registry/couple/share/share.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:50143295158b817ed2c9c77_14120082%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d2c27fa42e4ae96d24a706081687ff468bdb815' => 
    array (
      0 => 'public/_template/front/registry/couple/share/share.tpl',
      1 => 1488459754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50143295158b817ed2c9c77_14120082',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'user_session' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58b817ed2ec841_23213075',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b817ed2ec841_23213075')) {
function content_58b817ed2ec841_23213075 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '50143295158b817ed2c9c77_14120082';
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
                    <h4 class="">Registry Sharer</h4>
                    <p class="">Your registry url</p>
                    <input type="text"  class="form-control disabled" disabled value="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/<?php echo $_smarty_tpl->tpl_vars['user_session']->value[0]['registry_url_tag'];?>
">
                    <div class="social-sign-in outer-top-xs">
                        <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i>Share on Facebook</a>
                        <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i>Share on Twitter</a>
                    </div>
                    <hr>
                        <p class="">Share via email</p>
                        <input type="hidden" value="login" name="action">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                            <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                        </div>
                        <div class="social-sign-in outer-top-xs pull-right">
                            <button type="submit" class="button btn-sm btn-primary"><i class=""></i>Share Registry</button>
                        </div>
                        <button class="btn-upper btn btn-success" id="extra_email">Add new email</button>
                        <button class="btn-upper btn btn-warning" id="remove_extra">Remove Last Email</button>
                </div>
                <!-- Sign-in -->

                <!-- create a new account -->

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