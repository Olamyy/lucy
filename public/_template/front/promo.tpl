{if $promo|default:''}
<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">Promo Deals</h3>
    <div id="advertisement" class="advertisement">
        {foreach from=$promo item=data key=eKey}

            <input type="hidden" id="product_id" value="{$data.product_id}">

            <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                        <div class="image"> <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$data.image}" alt=""> </div>
                    </div>
                    <div class="product-info text-left m-t-20">
                        <h3 class="name"><a href="{$BASE_URL}product?product_id={$data.product_id}">{$data.name|capitalize}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price"> {$data.price} </span>
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
        {/foreach}
    </div>
</div>
</div>
{/if}
