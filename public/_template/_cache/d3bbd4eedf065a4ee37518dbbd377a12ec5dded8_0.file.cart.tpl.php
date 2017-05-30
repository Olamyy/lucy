<?php /* Smarty version 3.1.24, created on 2017-03-05 14:23:09
         compiled from "public/_template/front/registry/cart.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:133996090658bc113d481802_45080425%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3bbd4eedf065a4ee37518dbbd377a12ec5dded8' => 
    array (
      0 => 'public/_template/front/registry/cart.tpl',
      1 => 1488717701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133996090658bc113d481802_45080425',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'user_cart' => 0,
    'user_cart_items' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
    'product' => 0,
    'product_details' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58bc113d4eee18_29089541',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58bc113d4eee18_29089541')) {
function content_58bc113d4eee18_29089541 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '133996090658bc113d481802_45080425';
echo $_smarty_tpl->getSubTemplate ("../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("../navmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="body-content outer-top-xs">
    <div class="container">
        <div class="">
            <div class="shopping-cart">
                <div class="shopping-cart-table ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="cart-description item">Image</th>
                                <th class="cart-product-name item">Product Name</th>
                                <th class="cart-qty item">Quantity</th>
                                <th class="cart-total last-item">Grandtotal</th>
                            </tr>
                            </thead><!-- /thead -->
                            <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="shopping-cart-btn">
							<span class="">
								<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
							</span>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php if ($_smarty_tpl->tpl_vars['user_cart']->value) {?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['user_cart_items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['product']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$foreach_product_Sav = $_smarty_tpl->tpl_vars['product'];
?>
                                    <tr>
                                        <td class="cart-image">
                                            <a class="entry-thumbnail">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" width="100" height="100" alt="">
                                            </a>
                                        </td>
                                        <td class="cart-product-name-info">
                                            <h4 class='cart-product-description'><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product_details']->value[0]['name'];?>
</a></h4>
                                        </td>
                                        <td class="cart-product-sub-total"><span class="cart-sub-total-price"><?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</span></td>
                                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">&#8358;<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span></td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['product'] = $foreach_product_Sav;
}
?>
                            <?php } else { ?>
                            <tr>



                            <?php }?>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 estimate-ship-tax">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <span class="estimate-title">Delivery</span>
                                <p>Delivery Options</p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr >
                            <td>
                                <div class="form-group" id="delivery_options">
                                    <label class="info-title control-label" data-toggle="tooltip" title="Where would like this product delivered?"
                                    >Select Delivery Address<span>*</span></label>
                                    <select class="form-control unicase-form-control selectpicker" id="address_options">
                                        <option>--Select options--</option>
                                        <option>Your Address</option>
                                        <option>Registry Address</option>
                                    </select>
                                </div>
                                <button type="submit" id="address_choice_option" class="btn-upper btn btn-primary">Use Address</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 col-sm-12 estimate-ship-tax">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <span class="estimate-title">Discount Code</span>
                                <p>Enter your coupon code if you have one..</p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon..">
                                </div>
                                <div class="clearfix pull-right">
                                    <button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
                                </div>
                            </td>
                        </tr>
                        </tbody><!-- /tbody -->
                    </table><!-- /table -->
                </div><!-- /.estimate-ship-tax -->

                <div class="col-md-4 col-sm-12 cart-shopping-total">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <div class="cart-sub-total">
                                    Subtotal<span class="inner-left-md">$600.00</span>
                                </div>
                                <div class="cart-grand-total">
                                    Grand Total<span class="inner-left-md">$600.00</span>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="cart-checkout-btn pull-right">
                                    <button type="submit" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</button>
                                    <span class="">Checkout with multiples address!</span>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>