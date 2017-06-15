<?php /* Smarty version 3.1.24, created on 2017-06-08 15:59:21
         compiled from "public/_template/front/registry/couple/dashboard/dashboard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17860033559396649a42954_04242753%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5634882a35433e4969a5767dd24f9dcbbf618b5f' => 
    array (
      0 => 'public/_template/front/registry/couple/dashboard/dashboard.tpl',
      1 => 1496931292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17860033559396649a42954_04242753',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59396649ae7b12_03092704',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59396649ae7b12_03092704')) {
function content_59396649ae7b12_03092704 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17860033559396649a42954_04242753';
echo $_smarty_tpl->getSubTemplate ("../../../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./coredashboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php echo $_smarty_tpl->getSubTemplate ("./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>