{if $best_sellers|default: ''}

    <input type="hidden" id="base_url" value="{$BASE_URL}">
    <input type="hidden" id="quantity" value="1">
    <input type="hidden" id="user_ip" value="{$ip}">


    <div class="best-deal wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">Best seller</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
            {foreach from=$best_sellers item=best_seller key=eKey}
                <div class="item">
                    <div class="products best-product">
                        <div class="product">
                            <div class="product-micro">
                                <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                        <div class="product-image">
                                            <div class="image"> <a href="{$BASE_URL}product?product_id={$best_seller.product_id}"> <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$best_seller.image}" alt=""> </a> </div>
                                            <!-- /.image -->

                                        </div>
                                        <!-- /.product-image -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col2 col-xs-7">
                                        <div class="product-info">
                                            <h3 class="name"><a href="{$BASE_URL}product?product_id={$best_seller.product_id}">{$best_seller.name|capitalize}</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price"> <span class="price">&#8358;{$best_seller.price}</span> </div>
                                            <!-- /.product-price -->

                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.product-micro-row -->
                            </div>
                            <!-- /.product-micro -->

                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
    <!-- /.sidebar-widget-body -->
</div>

{/if}


