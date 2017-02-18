<?php /* Smarty version 3.1.24, created on 2017-02-14 20:49:44
         compiled from "/var/www/html/lucyregistry/public/_template/front/registry/couple/dashboard/couplesmalldetails.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:193147494558a35f5825bcd6_32059508%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72259fc7271641e48200ff9238d8c384a82e1855' => 
    array (
      0 => '/var/www/html/lucyregistry/public/_template/front/registry/couple/dashboard/couplesmalldetails.tpl',
      1 => 1487096653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193147494558a35f5825bcd6_32059508',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
    'user_session' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58a35f582d3cc3_90190977',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a35f582d3cc3_90190977')) {
function content_58a35f582d3cc3_90190977 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '193147494558a35f5825bcd6_32059508';
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
index.php/" style="margin-top: 20px; height: 50px; width: 200px;">Add Gifts</button>
            </div>
        </div>
    </div>
    <!-- /.sidebar-widget -->
</div>
<?php }
}
?>