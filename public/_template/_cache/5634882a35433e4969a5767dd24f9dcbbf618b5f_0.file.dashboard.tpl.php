<?php /* Smarty version 3.1.24, created on 2017-02-20 20:47:26
         compiled from "public/_template/front/registry/couple/dashboard/dashboard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15678996958ab47ce92afe6_03738629%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5634882a35433e4969a5767dd24f9dcbbf618b5f' => 
    array (
      0 => 'public/_template/front/registry/couple/dashboard/dashboard.tpl',
      1 => 1487620044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15678996958ab47ce92afe6_03738629',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ab47ce94db42_34906501',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ab47ce94db42_34906501')) {
function content_58ab47ce94db42_34906501 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15678996958ab47ce92afe6_03738629';
echo $_smarty_tpl->getSubTemplate ("../../../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./side.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("../../../mainsliders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("../../../newproducts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>