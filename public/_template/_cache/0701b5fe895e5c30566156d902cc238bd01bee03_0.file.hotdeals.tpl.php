<?php /* Smarty version 3.1.24, created on 2017-02-17 22:29:06
         compiled from "/var/www/html/lucy/public/_template/front/hotdeals.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:135165938858a76b23004c28_81291687%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0701b5fe895e5c30566156d902cc238bd01bee03' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/hotdeals.tpl',
      1 => 1487366940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135165938858a76b23004c28_81291687',
  'variables' => 
  array (
    'hot_deals' => 0,
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58a76b2306b685_00448428',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a76b2306b685_00448428')) {
function content_58a76b2306b685_00448428 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/html/lucy/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '135165938858a76b23004c28_81291687';
if ((($tmp = @$_smarty_tpl->tpl_vars['hot_deals']->value)===null||$tmp==='' ? '' : $tmp)) {?>


<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">Hot Deals</h3>
        <div id="advertisement" class="advertisement">
            <?php
$_from = $_smarty_tpl->tpl_vars['hot_deals']->value;
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
                <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                        <div class="image"> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/products/<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" alt=""> </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                        <h3 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['product_id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['data']->value['name']);?>
</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price">&#8358;<?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
 </span></div>
                        <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->

                    <div class="">
                        <div class="action">
                            <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                    <button class="btn btn-success cart_add" type="button">To Cart</button>
                                    <button class="btn btn-primary registry_add" type="button">To Registry</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                        </div>
                        <!-- /.action -->
                    </div>              <!-- /.cart -->
                </div>
            </div>
    <?php
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
}
?>
        </div>

    <!-- /.sidebar-widget -->
</div>

<?php echo $_smarty_tpl->getSubTemplate ("./promo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }

}
}
?>