<?php /* Smarty version 3.1.24, created on 2017-01-17 05:08:23
         compiled from "public/_template/front/store.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1576772545587d98b7e3de11_04084657%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0102daf03c9775495df53e03863061631917d063' => 
    array (
      0 => 'public/_template/front/store.tpl',
      1 => 1484626100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1576772545587d98b7e3de11_04084657',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_587d98b7e63161_57929176',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587d98b7e63161_57929176')) {
function content_587d98b7e63161_57929176 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1576772545587d98b7e3de11_04084657';
echo $_smarty_tpl->getSubTemplate ('./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./navmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./side.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./mainsliders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>