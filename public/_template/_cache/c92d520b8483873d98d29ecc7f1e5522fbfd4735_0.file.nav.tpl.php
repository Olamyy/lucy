<?php /* Smarty version 3.1.24, created on 2017-06-08 04:18:51
         compiled from "/var/www/html/lucy/public/_template/front/registry/couple/preview/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18661859595938c21b4419e8_70912554%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c92d520b8483873d98d29ecc7f1e5522fbfd4735' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/registry/couple/preview/nav.tpl',
      1 => 1496170487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18661859595938c21b4419e8_70912554',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5938c21b4455f3_74979713',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5938c21b4455f3_74979713')) {
function content_5938c21b4455f3_74979713 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18661859595938c21b4419e8_70912554';
?>
</div>

</div>
</header>
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/dashboard"> <button class="col-xs-6 col-sm-6 col-md-1 pull-left back-to-dashboard text-center">
                Dashboard
            </button></a>
<button class="col-xs-6 col-sm-6 col-md-1 pull-right preview-cart text-center" data-toggle="modal" data-target="#carts">
                cart
            </button>

<?php }
}
?>