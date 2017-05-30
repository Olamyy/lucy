{include file="../header.tpl"}
{include file="../navmenu.tpl"}

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
								<a href="{$BASE_URL}" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
							</span>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                            <tbody>
                            {if $user_cart_items|default:''}
                                {foreach from=$user_cart_items item=product key=eKey}
                                    {$price_arr[] = {math equation="x * y" x=$product.quantity y=$product.price}}
                                    <tr>
                                        <td class="cart-image">
                                            <a class="entry-thumbnail">
                                                <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}" width="100" height="100" alt="">
                                            </a>
                                        </td>
                                        <td class="cart-product-name-info">
                                            <h4 class='cart-product-description'><a href="{$BASE_URL}product?product_id={$product.product_id}">{$product_details[0]['name']}</a></h4>
                                        </td>
                                        <td class="cart-product-sub-total" ><span class="cart-sub-total-price">{$product.quantity}</span></td>
                                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">&#8358;{math equation="x * y" x=$product.quantity y=$product.price}</span></td>
                                    </tr>
                                {/foreach}
                            {else}
                            <tr>




                            {/if}
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
                                    Subtotal<span class="inner-left-md">&#8358;{$price_arr|array_sum}</span>
                                </div>
                                <div class="cart-grand-total">
                                    Grand Total<span class="inner-left-md">&#8358;{$price_arr|array_sum}</span>
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

{include file="../footer.tpl"}