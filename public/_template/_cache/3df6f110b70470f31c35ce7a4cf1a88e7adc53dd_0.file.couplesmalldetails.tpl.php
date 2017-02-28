<?php /* Smarty version 3.1.24, created on 2017-02-25 00:13:53
         compiled from "/var/www/html/lucy/public/_template/front/registry/couple/dashboard/couplesmalldetails.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9276465858b0be318f9899_59876217%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3df6f110b70470f31c35ce7a4cf1a88e7adc53dd' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/registry/couple/dashboard/couplesmalldetails.tpl',
      1 => 1487978030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9276465858b0be318f9899_59876217',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
    'user_session' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58b0be3191c015_20586175',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b0be3191c015_20586175')) {
function content_58b0be3191c015_20586175 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9276465858b0be318f9899_59876217';
?>
<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <div id="advertisement" class="advertisement">
        <div class="item">
            <div class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/front/assets/images/dashboardcouple.png" alt="Image">
                <br>
                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['user_session']->value)===null||$tmp==='' ? '' : $tmp)) {?>
                        <button class="btn btn-primary" style="background-color: #FF8F00; font-weight: 300; margin-top: 5px; font-size: large;"><?php echo $_smarty_tpl->tpl_vars['user_session']->value[0]['groom_first_name'];?>
 & <?php echo $_smarty_tpl->tpl_vars['user_session']->value[0]['bride_first_name'];?>
</button>
                        <div>
                            <h5 style="margin-top: 10px;"><?php if (!$_smarty_tpl->tpl_vars['user_session']->value[0]['wedding_date']) {?>Date coming Soon<?php }
echo $_smarty_tpl->tpl_vars['user_session']->value[0]['wedding_date'];?>
</h5>
                        </div>
                <?php }?>
                <button class="glyphicon glyphicon-plus btn btn-lg btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" style="margin-top: 20px; height: 50px; width: 200px;" onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
'">Add Gifts</button>
            </div>
        </div>
    </div>
    <!-- /.sidebar-widget -->
</div>
<?php }
}
?>