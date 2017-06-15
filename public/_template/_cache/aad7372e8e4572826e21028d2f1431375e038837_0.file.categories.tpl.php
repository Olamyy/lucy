<?php /* Smarty version 3.1.24, created on 2017-06-04 10:06:41
         compiled from "public/_template/front/categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19895053695933cda1695044_97872760%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aad7372e8e4572826e21028d2f1431375e038837' => 
    array (
      0 => 'public/_template/front/categories.tpl',
      1 => 1496566969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19895053695933cda1695044_97872760',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5933cda16aa115_94782582',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5933cda16aa115_94782582')) {
function content_5933cda16aa115_94782582 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19895053695933cda1695044_97872760';
echo $_smarty_tpl->getSubTemplate ('./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./navmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row'>
            <?php echo $_smarty_tpl->getSubTemplate ("./side_category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php echo $_smarty_tpl->getSubTemplate ("./main_category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <!-- /.col -->
        </div>
        </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ("./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>