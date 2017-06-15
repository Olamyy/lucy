<?php /* Smarty version 3.1.24, created on 2017-06-01 03:02:11
         compiled from "public/_template/front/registry/cart.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:118784768592f75a3d84e72_19108249%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3bbd4eedf065a4ee37518dbbd377a12ec5dded8' => 
    array (
      0 => 'public/_template/front/registry/cart.tpl',
      1 => 1496282526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118784768592f75a3d84e72_19108249',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'user_cart_items' => 0,
    'product' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
    'product_details' => 0,
    'price_arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592f75a3df01d6_83189045',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592f75a3df01d6_83189045')) {
function content_592f75a3df01d6_83189045 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/var/www/html/lucy/vendor/smarty/smarty/libs/plugins/function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '118784768592f75a3d84e72_19108249';
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
                            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['user_cart_items']->value)===null||$tmp==='' ? '' : $tmp)) {?>
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
                                    <?php ob_start();
echo smarty_function_math(array('equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['product']->value['quantity'],'y'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);
$_tmp1=ob_get_clean();
$_smarty_tpl->createLocalArrayVariable('price_arr', null, 0);
$_smarty_tpl->tpl_vars['price_arr']->value[] = $_tmp1;?>
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
                                        <td class="cart-product-sub-total" ><span class="cart-sub-total-price"><?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</span></td>
                                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">&#8358;<?php echo smarty_function_math(array('equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['product']->value['quantity'],'y'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
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
                                    Subtotal<span class="inner-left-md">&#8358;<?php echo array_sum($_smarty_tpl->tpl_vars['price_arr']->value);?>
</span>
                                </div>
                                <div class="cart-grand-total">
                                    Grand Total<span class="inner-left-md">&#8358;<?php echo array_sum($_smarty_tpl->tpl_vars['price_arr']->value);?>
</span>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="cart-checkout-btn pull-right">
                                    <button type="submit" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</button>
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