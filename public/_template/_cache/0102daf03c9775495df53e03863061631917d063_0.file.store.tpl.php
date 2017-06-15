<?php /* Smarty version 3.1.24, created on 2017-06-12 15:00:45
         compiled from "public/_template/front/store.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1972999687593e9e8d2a8163_38549407%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0102daf03c9775495df53e03863061631917d063' => 
    array (
      0 => 'public/_template/front/store.tpl',
      1 => 1497204505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1972999687593e9e8d2a8163_38549407',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_593e9e8d2c4a42_47915951',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593e9e8d2c4a42_47915951')) {
function content_593e9e8d2c4a42_47915951 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1972999687593e9e8d2a8163_38549407';
echo $_smarty_tpl->getSubTemplate ('./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./navmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./side.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./mainsliders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./newarrivals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>