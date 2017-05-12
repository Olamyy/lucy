<?php /* Smarty version 3.1.24, created on 2017-04-15 20:25:26
         compiled from "/var/www/html/lucy/public/_template/front/registry/couple/dashboard/side.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:130496477158f273a6ea10a8_30981906%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '905a7fba700ad170e2fcb7d1a913455499a91b32' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/registry/couple/dashboard/side.tpl',
      1 => 1492284310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130496477158f273a6ea10a8_30981906',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58f273a6ebcba5_23513710',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f273a6ebcba5_23513710')) {
function content_58f273a6ebcba5_23513710 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '130496477158f273a6ea10a8_30981906';
?>
<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                    <?php echo $_smarty_tpl->getSubTemplate ("./couplesmalldetails.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    <?php echo $_smarty_tpl->getSubTemplate ("./wizard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                </div>

<?php }
}
?>