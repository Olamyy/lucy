<?php /* Smarty version 3.1.24, created on 2017-06-10 06:52:30
         compiled from "/var/www/html/lucy/public/_template/front/promo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:499751374593b891e2bc0f2_20651021%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9ada46897abd509924e1df67dd6512fe42eebbe' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/promo.tpl',
      1 => 1497073948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '499751374593b891e2bc0f2_20651021',
  'variables' => 
  array (
    'promo' => 0,
    'data' => 0,
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_593b891e32bb49_02541812',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593b891e32bb49_02541812')) {
function content_593b891e32bb49_02541812 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/html/lucy/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '499751374593b891e2bc0f2_20651021';
if ((($tmp = @$_smarty_tpl->tpl_vars['promo']->value)===null||$tmp==='' ? '' : $tmp)) {?>
<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">Promo Deals</h3>
    <div id="advertisement" class="advertisement">
        <?php
$_from = $_smarty_tpl->tpl_vars['promo']->value;
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

            <input type="hidden" id="product_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['product_id'];?>
">

            <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                        <div class="image"> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/products/<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" alt=""> </div>
                    </div>
                    <div class="product-info text-left m-t-20">
                        <h3 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['product_id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['data']->value['name']);?>
</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price"> <?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
 </span>
                        </div>
                    </div>
                    <div class="cart clearfix animate-effect">
                        <div class="action">
                            <div class="add-cart-button btn-group">
                                <button class="btn btn-primary cart-btn" id="registry_add" type="button">Add To Registry</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
}
?>
    </div>
</div>
</div>
<?php }

}
}
?>