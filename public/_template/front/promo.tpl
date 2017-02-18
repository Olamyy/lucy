{if $promo_deals|default:''}
<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">Promo Deals</h3>
    <div id="advertisement" class="advertisement">
        {foreach from=$promo_deals item=data key=eKey}
            <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                        <div class="image"> <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$data.image}" alt=""> </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                        <h3 class="name"><a href="{$BASE_URL}product?product_id={$data.product_id}">{$data.name|capitalize}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price"> {$data.price} </span> <span class="price-before-discount">{$data.previous_price}</span> </div>
                        <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->

                    <div class="cart clearfix animate-effect">
                        <div class="action">
                            <div class="add-cart-button btn-group">
                                <button class="btn btn-primary cart-btn" id="registry_add" type="button">Add To Registry</button>
                            </div>
                        </div>
                        <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                </div>
            </div>
        {/foreach}
    </div>

    <!-- /.sidebar-widget -->
</div>
{/if}
