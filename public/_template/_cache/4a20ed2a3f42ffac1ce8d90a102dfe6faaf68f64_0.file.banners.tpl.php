<?php /* Smarty version 3.1.24, created on 2017-02-21 12:47:34
         compiled from "/var/www/html/lucy/public/_template/front/banners.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:102361253558ac28d6caa2a8_93152156%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a20ed2a3f42ffac1ce8d90a102dfe6faaf68f64' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/banners.tpl',
      1 => 1487677328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102361253558ac28d6caa2a8_93152156',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ac28d6cb2d44_92278907',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ac28d6cb2d44_92278907')) {
function content_58ac28d6cb2d44_92278907 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '102361253558ac28d6caa2a8_93152156';
?>

<div class="wide-banners wow fadeInUp outer-bottom-xs">
    <div class="row">
        <div class="col-md-7 col-sm-7">
            <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/front/assets/images/banners/home-banner1.jpg" alt=""> </div>
            </div>
            <!-- /.wide-banner -->
        </div>
        <!-- /.col -->
        <div class="col-md-5 col-sm-5">
            <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/front/assets/images/banners/home-banner2.jpg" alt=""> </div>
            </div>
            <!-- /.wide-banner -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.wide-banners -->


<!-- /.homebanner-holder -->
<!-- ============================================== CONTENT : END ============================================== -->
</div>
<?php }
}
?>