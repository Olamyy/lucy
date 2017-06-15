<?php /* Smarty version 3.1.24, created on 2017-06-11 18:27:02
         compiled from "/var/www/html/lucy/public/_template/front/newproducts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1623490812593d7d6669f2b5_84420811%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d98444ad21e9b86ea37e6b7948d577f73e428b' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/newproducts.tpl',
      1 => 1497202019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1623490812593d7d6669f2b5_84420811',
  'variables' => 
  array (
    'new_products' => 0,
    'data' => 0,
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_593d7d666ca4c0_18584105',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593d7d666ca4c0_18584105')) {
function content_593d7d666ca4c0_18584105 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/html/lucy/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '1623490812593d7d6669f2b5_84420811';
?>

<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
    <div class="more-info-tab clearfix ">
        <h3 class="new-product-title pull-left">New Products</h3>
    </div>
    <div class="tab-content outer-top-xs">
        <div class="tab-pane in active" id="all">
            <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                    <div class="item item-carousel">
                        <div class="products">
                            <?php
$_from = $_smarty_tpl->tpl_vars['new_products']->value;
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
                            <div class="product">
                                <input type="hidden" id="product_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['product_id'];?>
">
                                <div class="item">
                                    <div class="products">
                                        <div class="hot-deal-wrapper">
                                            <div class="image"> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/products/<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" height="100px" alt=""> </div>
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
                                        <div class="">
                                            <div class="">
                                                <ul class="">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-success cart_add" type="button">To Cart</button>
                                                        <br>
                                                        <br>
                                                        <button class="btn btn-danger registry_add" type="button">To Registry</button>
                                                    </li>
                                                </ul>
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

                </div>
            </div>
        </div>
    </div>
    <!-- /.tab-content -->
</div><?php }
}
?>