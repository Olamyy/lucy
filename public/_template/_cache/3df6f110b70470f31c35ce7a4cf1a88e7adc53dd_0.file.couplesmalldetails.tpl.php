<?php /* Smarty version 3.1.24, created on 2017-02-16 09:29:56
         compiled from "/var/www/html/lucy/public/_template/front/registry/couple/dashboard/couplesmalldetails.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:129929655158a563040e8952_40885990%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3df6f110b70470f31c35ce7a4cf1a88e7adc53dd' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/registry/couple/dashboard/couplesmalldetails.tpl',
      1 => 1487233792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129929655158a563040e8952_40885990',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
    'user_session' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58a5630413f946_46555047',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a5630413f946_46555047')) {
function content_58a5630413f946_46555047 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '129929655158a563040e8952_40885990';
?>
<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <div id="advertisement" class="advertisement">
        <div class="item">
            <div class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/front/assets/images/dashboardcouple.png" alt="Image">
                <br>
                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['user_session']->value)===null||$tmp==='' ? '' : $tmp)) {?>

                    <?php
$_from = $_smarty_tpl->tpl_vars['user_session']->value;
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
                        <button class="btn btn-primary" style="background-color: #FF8F00; font-weight: 300; margin-top: 5px; font-size: large;"><?php echo $_smarty_tpl->tpl_vars['data']->value['groom_first_name'];?>
 & <?php echo $_smarty_tpl->tpl_vars['data']->value['bride_first_name'];?>
</button>
                        <div>
                            <h5 style="margin-top: 10px;"><?php if (!$_smarty_tpl->tpl_vars['data']->value['wedding_date']) {?>Date coming Soon<?php }
echo $_smarty_tpl->tpl_vars['data']->value['wedding_date'];?>
</h5>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
}
?>
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