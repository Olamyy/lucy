
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
                            {foreach from=$new_products item=data key=eKey}
                            <div class="product">
                                <input type="hidden" id="product_id" value="{$data.product_id}">
                                <div class="item">
                                    <div class="products">
                                        <div class="hot-deal-wrapper">
                                            <div class="image"> <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$data.image}" height="100px" alt=""> </div>
                                        </div>
                                        <div class="product-info text-left m-t-20">
                                            <h3 class="name"><a href="{$BASE_URL}product?product_id={$data.product_id}">{$data.name|capitalize}</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price"> <span class="price"> {$data.price} </span>
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
                                {/foreach}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.tab-content -->
</div>