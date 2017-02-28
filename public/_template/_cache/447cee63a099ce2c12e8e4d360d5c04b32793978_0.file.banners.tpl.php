<?php /* Smarty version 3.1.24, created on 2017-02-21 17:01:38
         compiled from "/var/www/html/lucyreg/public/_template/front/banners.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:123467781258ac646297b822_90963543%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '447cee63a099ce2c12e8e4d360d5c04b32793978' => 
    array (
      0 => '/var/www/html/lucyreg/public/_template/front/banners.tpl',
      1 => 1487677328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123467781258ac646297b822_90963543',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ac6462983d08_28828022',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ac6462983d08_28828022')) {
function content_58ac6462983d08_28828022 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '123467781258ac646297b822_90963543';
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