{if $featured_products|default: ''}

<section class="section featured-product wow fadeInUp">
    <h3 class="section-title">Featured products</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

        {foreach from=$featured_products item=featured_product key=eKey}

        <div class="item item-carousel">
            <div class="products">
                <div class="product">
                    <div class="product-image">
                        <div class="image"> <a href="{$BASE_URL}product?product_id={$featured_product.product_id}"><img  src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$featured_product.image}" alt=""></a> </div>
                        <!-- /.image -->

                        <div class="tag hot"><span>hot</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                        <h3 class="name"><a href="{$BASE_URL}product?product_id={$featured_product.product_id}">{$featured_product.name|capitalize}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price"> <span class="price">&#8358;{$featured_product.price}</span></div>
                        <div>
                        </div>
                        <!-- /.product-price -->

                    </div>

                    <div class="">
                        <div class="action">
                            <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                    <button class="btn btn-success" type="button">To Cart</button>
                                    <button class="btn btn-primary registry_add" type="button">To Registry</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                        </div>
                        <!-- /.action -->
                    </div>

                    <!-- /.cart -->
                </div>
                <!-- /.product -->

            </div>
            <!-- /.products -->
        </div>

        {/foreach}
        <!-- /.item -->

    </div>
    <!-- /.home-owl-carousel -->
</section>


{/if}
