<?php /* Smarty version 3.1.24, created on 2017-01-21 10:45:29
         compiled from "public/_template/front/registry/couple/dashboard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:145071356658832db927d784_22378677%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24004bbd4e52941b36be05cb36e1c31772d319b0' => 
    array (
      0 => 'public/_template/front/registry/couple/dashboard.tpl',
      1 => 1484991857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145071356658832db927d784_22378677',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58832db93286d8_43609512',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58832db93286d8_43609512')) {
function content_58832db93286d8_43609512 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '145071356658832db927d784_22378677';
echo $_smarty_tpl->getSubTemplate ('../../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('../../navmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("../../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>