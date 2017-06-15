<div class="wide-banners wow fadeInUp outer-bottom-xs">
    <div class="row">
        <div class="col-md-12">
            <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/banners/cat-banner-1.jpg" alt=""> </div>
            </div>
        </div>
    </div>
    <section class="section featured-product wow fadeInUp" id="padit">
        <h3 class="section-title">Featured products</h3>
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            {foreach from=$on_home_page item=product}
                <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="{$BASE_URL}product?product_id={$product.product_id}"> <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}" alt="{$product.name}"> </a> </div>
                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <div class="product-info text-left">
                            <h3 class="name"><a href="{$BASE_URL}product?product_id={$product.product_id}">{$product.name}</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price">{$product.price}</span> </div>
                        </div>
                    </div>
                </div>
                </div>
            {/foreach}
        </div>
    </section>
    <section class="section featured-product wow fadeInUp" id="padit">
        <div class="best-deal wow fadeInUp outer-bottom-xs">
            <h3 class="section-title">Best seller</h3>
            <div class="sidebar-widget-body outer-top-xs">
                <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                    {foreach from=$on_home_page item=product}
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"> <a href="{$BASE_URL}product?product_id={$product.product_id}"> <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}" alt="{$product.name}"> </a> </div>
                                        <div class="tag hot"><span>hot</span></div>
                                    </div>
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{$BASE_URL}product?product_id={$product.product_id}">{$product.name}</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price">{$product.price}</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </section>
    <section class="section latest-blog outer-bottom-vs wow fadeInUp">
        <h3 class="section-title">latest form blog</h3>
        <div class="blog-slider-container outer-top-xs">
            <div class="owl-carousel blog-slider custom-carousel">
                <div class="item">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <div class="image"> <a href="blog.html"><img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/blog-post/post1.jpg" alt=""></a> </div>
                        </div>
                        <div class="blog-post-info text-left">
                            <h3 class="name"><a href="#">Voluptatem accusantium doloremque laudantium</a></h3>
                            <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
                            <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <a href="#" class="lnk btn btn-primary">Read more</a> </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <div class="image"> <a href="blog.html"><img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/blog-post/post2.jpg" alt=""></a> </div>
                        </div>
                        <div class="blog-post-info text-left">
                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                            <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <a href="#" class="lnk btn btn-primary">Read more</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

