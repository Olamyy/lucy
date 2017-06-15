{include file='./marketheader.tpl'}

{include file="./marketnav.tpl"}

<input type="hidden" id="user_id" value="{$user_session[0].user_id}">


<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                        {if $banner|default:''}
                        {foreach from=$banner item=banners}
                            <div class="item" style="background-image: url({$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/banners/{$banners});">
                            </div>
                        {/foreach}
                    </div>
                    {/if}
                </div>
                <div class="info-boxes wow fadeInUp">
                    <div class="info-boxes-inner">
                        <div class="row">
                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">money back</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">30 Days Money Back Guarantee</h6>
                                </div>
                            </div>
                            <!-- .col -->

                            <div class="hidden-md col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">free shipping</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">Shipping on orders over $99</h6>
                                </div>
                            </div>
                            <!-- .col -->

                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">Special Sale</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">Extra $5 off on all items </h6>
                                </div>
                            </div>
                            <!-- .col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.info-boxes-inner -->

                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                {include file="./hotdeals.tpl"}
                {include file="./specialoffers.tpl"}
                <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
                    <h3 class="section-title">Newsletters</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <p>Sign Up for Our Newsletter!</p>
                        <form>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
                            </div>
                            <button class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <div class="wide-banners wow fadeInUp outer-bottom-xs">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="wide-banner cnt-strip">
                                <div class="image"> <img class="img-responsive" src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/banners/home-banner1.jpg" alt=""> </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-5 col-sm-5">
                            <div class="wide-banner cnt-strip">
                                <div class="image"> <img class="img-responsive" src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/banners/home-banner2.jpg" alt=""> </div>
                            </div>
                        </div>
                    </div>
                </div>

                {include file="./newproducts.tpl"}

                <section class="section featured-product wow fadeInUp">
                    <h3 class="section-title">Featured products</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                        <div class="item item-carousel">
                            {foreach from=$featured_products item=data key=eKey}
                            <div class="product">
                                <input type="hidden" id="product_id" value="{$data.product_id}">

                                <div class="item">
                                    <div class="products">
                                        <div class="hot-deal-wrapper">
                                            <div class="image"> <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$data.image}" alt="" height="100px" > </div>
                                        </div>
                                        <div class="product-info text-left m-t-20">
                                            <h3 class="name"><a href="{$BASE_URL}product?product_id={$data.product_id}">{$data.name|capitalize}</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price"> <span class="price"> {$data.price} </span>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="action">
                                                <ul class="list-unstyled">
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
                            </div>                        </div>
                    </div>
                </section>
                <br>
                <br>
                <div class="wide-banners wow fadeInUp outer-bottom-xs">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wide-banner cnt-strip">
                                <div class="image"> <img class="img-responsive" src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/banners/home-banner.jpg" alt=""> </div>
                                <div class="strip strip-text">
                                    <div class="strip-inner">
                                        <h2 class="text-right">New Mens Fashion<br>
                                            <span class="shopping-needs">Save up to 40% off</span></h2>
                                    </div>
                                </div>
                                <div class="new-label">
                                    <div class="text">NEW</div>
                                </div>
                                <!-- /.new-label -->
                            </div>
                            <!-- /.wide-banner -->
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->
                </div>
                <section class="section wow fadeInUp new-arriavls">
                    <h3 class="section-title">New Arrivals</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                        <div class="item item-carousel">
                            <div class="products">
                                {foreach from=$new_arrivals item=data key=eKey}
                                <div class="product">
                                    <input type="hidden" id="product_id" value="{$data.product_id}">

                                    <div class="item">
                                        <div class="products">
                                            <div class="hot-deal-wrapper">
                                                <div class="image"> <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$data.image}" height="100px"  alt=""> </div>
                                            </div>
                                            <div class="product-info text-left m-t-20">
                                                <h3 class="name"><a href="{$BASE_URL}product?product_id={$data.product_id}">{$data.name|capitalize}</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price"> <span class="price"> {$data.price} </span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="action">
                                                    <ul class="list-unstyled">
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
                </section>
            </div>
        </div>
{include file="./footer.tpl"}


