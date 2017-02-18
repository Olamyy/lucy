{if $hot_deals|default:''}


<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">Hot Deals</h3>
        <div id="advertisement" class="advertisement">
            {foreach from=$hot_deals item=data key=eKey}
                <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                        <div class="image"> <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$data.image}" alt=""> </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                        <h3 class="name"><a href="{$BASE_URL}product?product_id={$data.product_id}">{$data.name|capitalize}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price">&#8358;{$data.price} </span></div>
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
    {/foreach}
        </div>

    <!-- /.sidebar-widget -->
</div>

{include file="./promo.tpl"}

{/if}
