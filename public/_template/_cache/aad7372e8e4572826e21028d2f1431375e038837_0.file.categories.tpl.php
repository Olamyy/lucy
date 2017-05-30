<?php /* Smarty version 3.1.24, created on 2017-04-15 19:43:42
         compiled from "public/_template/front/categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:54749016458f269dedbe6b6_17466890%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aad7372e8e4572826e21028d2f1431375e038837' => 
    array (
      0 => 'public/_template/front/categories.tpl',
      1 => 1492281816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54749016458f269dedbe6b6_17466890',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'category_details' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58f269dede1aa5_07452171',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f269dede1aa5_07452171')) {
function content_58f269dede1aa5_07452171 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '54749016458f269dedbe6b6_17466890';
echo $_smarty_tpl->getSubTemplate ('./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("./navmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Home</a></li>
                <li class='active'><?php echo $_smarty_tpl->tpl_vars['category_details']->value[0]['title'];?>
</li>
            </ul>
        </div>
    </div>
</div>

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